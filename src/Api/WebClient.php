<?php

namespace BitBag\PocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\gabarytBiznesowaType;
use PocztaPolska\getEnvelopeBufor;
use PocztaPolska\getUrzedyNadania;
use PocztaPolska\pobranieType;
use PocztaPolska\przesylkaBiznesowaType;
use PocztaPolska\przesylkaPoleconaZagranicznaType;
use PocztaPolska\sendEnvelope;
use PocztaPolska\sposobPobraniaType;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;
use PocztaPolska\addShipment;
use PocztaPolska\adresType;
use PocztaPolska\ElektronicznyNadawca;
use PocztaPolska\getAddresLabelByGuid;
use PocztaPolska\paczkaPocztowaType;

final class WebClient implements WebClientInterface
{
    /**
     * @var ShippingGatewayInterface
     */
    private $shippingGateway;

    /**
     * @var ShipmentInterface
     */
    private $shipment;

    /**
     * @var string
     */
    private $guid;
    /**
     * @var ElektronicznyNadawca
     */
    private $connection;

    /**
     * {@inheritdoc}
     */
    public function setShippingGateway(ShippingGatewayInterface $shippingGateway)
    {
        $this->shippingGateway = $shippingGateway;
    }

    /**
     * {@inheritdoc}
     */
    public function setShipment(ShipmentInterface $shipment)
    {
        $this->shipment = $shipment;
    }

    /**
     * {@inheritdoc}
     */
    public function createLabel()
    {
        $this->connection = $this->connect();
        $this->guid = $this->generateGuid();

        $this->connection->addShipment($this->createShipment());

        $label = $this->connection->getAddresLabelByGuid($this->createParametersForLabel());


        return $label;
    }

    /**
     * {@inheritdoc}
     */
    public function sendEnvelope()
    {
        $this->connection = $this->connect();

        $packages = $this->connection->getEnvelopeBufor(new getEnvelopeBufor())->przesylka;

        $packagesShipped = [];

        if(is_array($packages)) {
            foreach ($packages as $package) {
                $packagesShipped[] = $package->numerNadania;
            }
        } else if($packages !== null) {
            $packagesShipped[] = $packages->numerNadania;
        } else {
            return [];
        }


        $posts = $this->connection->getUrzedyNadania(new getUrzedyNadania());
        $post = $posts->urzedyNadania[0];

        $sendEnvelope = new sendEnvelope();
        $sendEnvelope->urzadNadania = $post->urzadNadania;


        $sendEnvelopeResponseType = $this->connection->sendEnvelope($sendEnvelope);


        if ($sendEnvelopeResponseType->error === null) {
            return $packagesShipped;
        }

        return [];
    }

    /**
     * @return ElektronicznyNadawca
     */
    private function connect()
    {
        return new ElektronicznyNadawca(
            $this->getShippingGatewayConfig('wsdl'),
            [
                'login' => $this->getShippingGatewayConfig('login'),
                'password' => $this->getShippingGatewayConfig('password')
            ]
        );
    }

    /**
     * @return adresType
     */
    private function getAddress()
    {
        $shippingAddress = $this->getOrder()->getShippingAddress();

        $address = new adresType();
        $address->nazwa = $shippingAddress->getCompany() . ' ' . $shippingAddress->getFullName();
        $address->ulica = $shippingAddress->getStreet();
        $address->miejscowosc = $shippingAddress->getCity();
        $address->kodPocztowy = str_replace('-', '', $shippingAddress->getPostcode());

        return $address;
    }

    /**
     * @return paczkaPocztowaType
     */
    private function createPackage()
    {
        if ($this->getOrder()->getShippingAddress()->getCountryCode() !== 'PL') {
            $package = new przesylkaPoleconaZagranicznaType();
        } else {
            $package = new PrzesylkaBiznesowaType();
        }

        if ($this->isCashOnDelivery()) {
            $value = $this->getOrder()->getTotal();

            if (method_exists($this->getOrder(), 'getCustomCod') && $this->getOrder()->getCustomCod()) {
                $value = $this->getOrder()->getCustomCod();
            }

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

        if (method_exists($this->getOrder(), 'getCustomWeight') && $this->getOrder()->getCustomWeight()) {
            $weight = $this->getOrder()->getCustomWeight();
        }

        $additionalInfo = '';

        if (method_exists($this->getOrder(), 'getShippingNotes')) {
            $additionalInfo = $this->getOrder()->getShippingNotes();
        }

        $package->masa = $weight * 100;
        $package->guid = $this->guid;
        $package->opis = $this->getOrder()->getNumber() . ' | ' . $additionalInfo;

        return $package;
    }

    /**
     * @return boolean
     */
    private function isCashOnDelivery()
    {
        $codPaymentMethodCode = $this->getShippingGatewayConfig('cod_payment_method_code');
        $payments = $this->getOrder()->getPayments();

        foreach ($payments as $payment) {
            return $payment->getMethod()->getCode() === $codPaymentMethodCode;
        }

        return false;
    }

    /**
     * @return addShipment
     */
    private function createShipment()
    {
        $package = $this->createPackage();

        $shipment = new addShipment();
        $shipment->przesylki[] = $package;

        return $shipment;
    }

    /**
     * @return string
     */
    private function generateGuid()
    {
        mt_srand((double)microtime() * 10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));

        return substr($charid, 0, 32);
    }

    /**
     * @return getAddresLabelByGuid
     */
    private function createParametersForLabel()
    {
        $parameters = new getAddresLabelByGuid();
        $parameters->guid = [$this->guid];

        return $parameters;
    }

    /**
     * @return OrderInterface|\Sylius\Component\Order\Model\OrderInterface
     */
    private function getOrder()
    {
        return $this->shipment->getOrder();
    }

    /**
     * @param $config
     *
     * @return string
     */
    private function getShippingGatewayConfig($config)
    {
        return $this->shippingGateway->getConfigValue($config);
    }
}
