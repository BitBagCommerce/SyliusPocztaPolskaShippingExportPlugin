<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\gabarytBiznesowaType;
use PocztaPolska\getAddresLabelByGuidResponse;
use PocztaPolska\getEnvelopeBufor;
use PocztaPolska\getUrzedyNadania;
use PocztaPolska\pobranieType;
use PocztaPolska\przesylkaBiznesowaType;
use PocztaPolska\przesylkaPoleconaZagranicznaType;
use PocztaPolska\sendEnvelope;
use PocztaPolska\sposobPobraniaType;
use SoapFault;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;
use PocztaPolska\addShipment;
use PocztaPolska\adresType;
use PocztaPolska\ElektronicznyNadawca;
use PocztaPolska\getAddresLabelByGuid;

final class WebClient implements WebClientInterface
{
    private ShippingGatewayInterface $shippingGateway;

    private ShipmentInterface $shipment;

    private string $guid;

    private ElektronicznyNadawca $connection;

    public function setShippingGateway(ShippingGatewayInterface $shippingGateway): void
    {
        $this->shippingGateway = $shippingGateway;
    }

    public function setShipment(ShipmentInterface $shipment): void
    {
        $this->shipment = $shipment;
    }

    /**
     * @throws SoapFault
     */
    public function createLabel(): getAddresLabelByGuidResponse
    {
        $this->connection = $this->connect();
        $this->guid = $this->generateGuid();

        $this->connection->addShipment($this->createShipment());

        return $this->connection->getAddresLabelByGuid($this->createParametersForLabel());
    }

    public function getLabelContent(): ?string
    {
        /** @var mixed $label */
        $label = $this->createLabel()->content;

        return base64_decode($label->pdfContent);
    }

    /**
     * @throws SoapFault
     */
    public function sendEnvelope(): array
    {
        $this->connection = $this->connect();

        $packages = $this->connection->getEnvelopeBufor(new getEnvelopeBufor())->przesylka;

        $packagesShipped = [];

        if(is_array($packages)) {
            foreach ($packages as $package) {
                $packagesShipped[] = $package->guid;
            }
        } else if($packages !== null) {
            $packagesShipped[] = $packages->guid;
        } else {
            return [];
        }


        $posts = $this->connection->getUrzedyNadania(new getUrzedyNadania());
        $post = is_array($posts) ? $posts->urzedyNadania[0] : $posts;

        $sendEnvelope = new sendEnvelope();
        $sendEnvelope->urzadNadania = $post->urzadNadania;


        $sendEnvelopeResponseType = $this->connection->sendEnvelope($sendEnvelope);


        if ($sendEnvelopeResponseType->error === null) {
            return $packagesShipped;
        }

        return [];
    }

    /**
     * @throws SoapFault
     */
    private function connect(): ElektronicznyNadawca
    {
        return new ElektronicznyNadawca(
            $this->getShippingGatewayConfig('wsdl'),
            [
                'login' => $this->getShippingGatewayConfig('login'),
                'password' => $this->getShippingGatewayConfig('password')
            ]
        );
    }

    private function getAddress(): adresType
    {
        $shippingAddress = $this->getOrder()->getShippingAddress();

        $address = new adresType();
        $address->nazwa = $shippingAddress->getCompany() . ' ' . $shippingAddress->getFullName();
        $address->ulica = $shippingAddress->getStreet();
        $address->miejscowosc = $shippingAddress->getCity();
        $address->kodPocztowy = str_replace('-', '', $shippingAddress->getPostcode());

        return $address;
    }

    private function createPackage(): object
    {
        if ($this->getOrder()->getShippingAddress()->getCountryCode() !== 'PL') {
            $package = new przesylkaPoleconaZagranicznaType();
        } else {
            $package = new PrzesylkaBiznesowaType();
        }

        if ($this->isCashOnDelivery()) {
            $value = $this->getOrder()->getTotal();

            $package->pobranie = new pobranieType();
            $package->pobranie->kwotaPobrania = $value;
            $package->pobranie->nrb = $this->getShippingGatewayConfig('billing_account_number');
            $package->pobranie->sposobPobrania = sposobPobraniaType::RACHUNEK_BANKOWY;
            $package->pobranie->tytulem = $this->getOrder()->getNumber();
        }

        $package->adres = $this->getAddress();
        if ($this->getOrder()->getShippingAddress()->getCountryCode() !== 'PL') {
            $package->adres->kraj = $this->getOrder()->getShippingAddress()->getCountryCode();
        }
        $package->gabaryt = gabarytBiznesowaType::M;
        $package->nadawca = $this->getAddress();

        $weight = $this->shipment->getShippingWeight();

        $additionalInfo = '';

        if (method_exists($this->getOrder(), 'getNotes')) {
            $additionalInfo = $this->getOrder()->getNotes();
        }

        $package->masa = $weight * 100;
        $package->guid = $this->guid;
        $package->opis = $this->getOrder()->getNumber() . ' | ' . $additionalInfo;

        return $package;
    }

    private function isCashOnDelivery(): bool
    {
        $codPaymentMethodCode = $this->getShippingGatewayConfig('cod_payment_method_code');
        $payments = $this->getOrder()->getPayments();

        foreach ($payments as $payment) {
            return $payment->getMethod()->getCode() === $codPaymentMethodCode;
        }

        return false;
    }

    private function createShipment(): addShipment
    {
        $package = $this->createPackage();

        $shipment = new addShipment();
        $shipment->przesylki[] = $package;

        return $shipment;
    }

    private function generateGuid(): string
    {
        mt_srand((int)microtime()*10000);
        $charid = strtoupper(md5(uniqid((string)rand(), true)));
        return substr($charid, 0, 32);

    }

    private function createParametersForLabel(): getAddresLabelByGuid
    {
        $parameters = new getAddresLabelByGuid();
        $parameters->guid = [$this->guid];

        return $parameters;
    }

    private function getOrder(): OrderInterface
    {
        return $this->shipment->getOrder();
    }

    /** @return mixed */
    private function getShippingGatewayConfig($config)
    {
        return $this->shippingGateway->getConfigValue($config);
    }
}
