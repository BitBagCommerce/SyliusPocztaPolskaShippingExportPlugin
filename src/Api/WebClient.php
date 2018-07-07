<?php

namespace BitBag\PocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\pobranieType;
use PocztaPolska\przesylkaPobraniowaType;
use PocztaPolska\sposobPobraniaType;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\OrderItemInterface;
use Sylius\Component\Core\Model\ShipmentInterface;
use PocztaPolska\addShipment;
use PocztaPolska\adresType;
use PocztaPolska\ElektronicznyNadawca;
use PocztaPolska\gabarytType;
use PocztaPolska\getAddresLabelByGuid;
use PocztaPolska\kategoriaType;
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
        $this->apiConstruct();

        $this->connection->addShipment($this->createShipment());

        $label = $this->connection->getAddresLabelByGuid($this->createParametersForLabel());

        return $label;
    }

    /**
     * {@inheritdoc}
     */
    private function apiConstruct()
    {
        $this->connection = $this->connect();
        $this->guid = $this->generateGuid();
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
        $package = new paczkaPocztowaType();

        if ($this->isCashOnDelivery()) {
            $value = $this->getOrder()->getTotal();

            if(method_exists($this->getOrder(), 'getCustomCod') && $this->getOrder()->getCustomCod()) {
                $value = $this->getOrder()->getCustomCod();
            }

            $package->pobranie = new pobranieType();
            $package->pobranie->kwotaPobrania = $value;
            $package->pobranie->nrb = $this->getShippingGatewayConfig('billing_account_number');
            $package->pobranie->sposobPobrania = sposobPobraniaType::RACHUNEK_BANKOWY;
            $package->pobranie->tytulem = $this->getOrder()->getNumber();
        }

        $package->adres = $this->getAddress();
        $package->iloscPotwierdzenOdbioru = 1;
        $package->kategoria = kategoriaType::EKONOMICZNA;
        $package->gabaryt = gabarytType::GABARYT_A;

        $weight = $this->shipment->getShippingWeight();

        if(method_exists($this->getOrder(), 'getCustomWeight') && $this->getOrder()->getCustomWeight()) {
            $weight = $this->getOrder()->getCustomWeight();
        }

        $additionalInfo = '';

        if(method_exists($this->getOrder(), 'getShippingNotes')) {
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
     * @return string
     */
    private function getContent()
    {
        $content = '';

        /** @var OrderItemInterface $item */
        foreach ($this->getOrder()->getItems() as $item) {

            $mainTaxon = $item->getProduct()->getMainTaxon();

            if ($mainTaxon !== null) {
                if (stristr($content, $mainTaxon->getName()) === false) {
                    $content .= $mainTaxon->getName() . ", ";
                }
            }
        }

        $content = rtrim($content, ", ");

        return substr($content, 0, 30);
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
