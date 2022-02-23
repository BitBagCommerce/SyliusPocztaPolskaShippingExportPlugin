<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Checker\PaymentChecker;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\gabarytBiznesowaType;
use PocztaPolska\pobranieType;
use PocztaPolska\przesylkaBiznesowaType;
use PocztaPolska\przesylkaPoleconaZagranicznaType;
use PocztaPolska\sposobPobraniaType;
use PocztaPolska\adresType;
use Sylius\Component\Core\Model\ShipmentInterface;

class PackageFactory implements PackageFactoryInterface
{
    public const COUNTRY_CODE = 'PL';

    private PaymentChecker $paymentChecker;

    public function __construct(PaymentChecker $paymentChecker)
    {
        $this->paymentChecker = $paymentChecker;
    }

    public function createNew(
        AdresType $addressType,
        ShippingGatewayInterface $shippingGateway,
        string $guid,
        ShipmentInterface $shipmentInterface
    ): object {
        $order = $shipmentInterface->getOrder();

        if ($order->getShippingAddress()->getCountryCode() !== self::COUNTRY_CODE) {
            $package = new przesylkaPoleconaZagranicznaType();
        } else {
            $package = new PrzesylkaBiznesowaType();
        }

        if ($this->paymentChecker->isCashOnDelivery($order, $shippingGateway)) {
            $value = $order->getTotal();

            $package->pobranie = new pobranieType();
            $package->pobranie->kwotaPobrania = $value;
            $package->pobranie->nrb = $shippingGateway->getConfigValue('billing_account_number');
            $package->pobranie->sposobPobrania = sposobPobraniaType::RACHUNEK_BANKOWY;
            $package->pobranie->tytulem = $order->getNumber();
        }

        $package->adres = $addressType;
        if ($order->getShippingAddress()->getCountryCode() !== self::COUNTRY_CODE) {
            $package->adres->kraj = $order->getShippingAddress()->getCountryCode();
        }
        $package->gabaryt = gabarytBiznesowaType::M;
        $package->nadawca = $addressType;

        $weight = $shipmentInterface->getShippingWeight();

        $additionalInfo = $order->getNotes();

        $package->masa = $weight * 100;
        $package->guid = $guid;
        $package->opis = $order->getNumber() . ' | ' . $additionalInfo;

        return $package;
    }
}
