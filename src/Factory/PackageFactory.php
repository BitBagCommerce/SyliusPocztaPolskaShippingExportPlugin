<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Checker\PaymentCheckerInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\adresType;
use PocztaPolska\gabarytBiznesowaType;
use PocztaPolska\pobranieType;
use PocztaPolska\przesylkaBiznesowaType;
use PocztaPolska\przesylkaPoleconaZagranicznaType;
use PocztaPolska\sposobPobraniaType;
use Sylius\Component\Core\Model\ShipmentInterface;

class PackageFactory implements PackageFactoryInterface
{
    public const COUNTRY_CODE = 'PL';

    private PaymentCheckerInterface $paymentChecker;

    public function __construct(PaymentCheckerInterface $paymentChecker)
    {
        $this->paymentChecker = $paymentChecker;
    }

    public function createNew(
        AdresType $addressType,
        ShippingGatewayInterface $shippingGateway,
        string $guid,
        ShipmentInterface $shipmentInterface,
    ): object {
        $order = $shipmentInterface->getOrder();

        if (self::COUNTRY_CODE !== $order->getShippingAddress()->getCountryCode()) {
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
        if (self::COUNTRY_CODE !== $order->getShippingAddress()->getCountryCode()) {
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
