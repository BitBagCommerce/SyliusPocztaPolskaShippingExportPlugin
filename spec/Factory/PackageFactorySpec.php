<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace spec\BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Checker\PaymentChecker;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\PackageFactory;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PhpSpec\ObjectBehavior;
use PocztaPolska\adresType;
use PocztaPolska\gabarytBiznesowaType;
use PocztaPolska\pobranieType;
use PocztaPolska\przesylkaBiznesowaType;
use PocztaPolska\przesylkaPoleconaZagranicznaType;
use PocztaPolska\sposobPobraniaType;
use Sylius\Component\Core\Model\AddressInterface;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;

class PackageFactorySpec extends ObjectBehavior
{
    private const US_COUNTRY_CODE = 'US';

    private const PL_COUNTRY_CODE = 'PL';

    private const GUID = '3C974A6AF0956F5A386A34A2960E6645';

    private const ORDER_NUMBER = '0000000000001';

    private const ORDER_VALUE = '100';

    private const ACCOUNT_NUMBER = '1234';

    function let(
        PaymentChecker $paymentChecker
    ): void {
        $this->beConstructedWith(
            $paymentChecker
        );
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(PackageFactory::class);
    }

    function it_should_create_foreign_package_with_stripe_checkout(
        ShipmentInterface $shipmentInterface,
        OrderInterface $order,
        AddressInterface $address,
        PaymentChecker $paymentChecker,
        ShippingGatewayInterface $shippingGateway
    ): void {
        $guid = self::GUID;
        $shipmentInterface->getOrder()->willReturn($order);
        $order->getShippingAddress()->willReturn($address);
        $address->getCountryCode()->willReturn(self::US_COUNTRY_CODE);
        $paymentChecker->isCashOnDelivery($order, $shippingGateway)->willReturn(false);
        $shipmentInterface->getShippingWeight()->willReturn('5000.0');
        $order->getNumber()->willReturn(self::ORDER_NUMBER);
        $order->getNotes()->willReturn();

        $addressType = new adresType();
        $addressType->kraj = self::US_COUNTRY_CODE;

        $this->createNew(
            $addressType,
            $shippingGateway,
            $guid,
            $shipmentInterface
        )->shouldBeLike($this->getExpectedResultForeignPackageWithStripeCheckout());
    }

    function it_should_create_foreign_package_with_cash_on_delivery(
        ShipmentInterface $shipmentInterface,
        OrderInterface $order,
        AddressInterface $address,
        PaymentChecker $paymentChecker,
        ShippingGatewayInterface $shippingGateway,
        adresType $addressType
    ): void {
        $guid = self::GUID;
        $shipmentInterface->getOrder()->willReturn($order);
        $order->getShippingAddress()->willReturn($address);
        $address->getCountryCode()->willReturn(self::US_COUNTRY_CODE);
        $paymentChecker->isCashOnDelivery($order, $shippingGateway)->willReturn(true);
        $shipmentInterface->getShippingWeight()->willReturn('5000.0');
        $order->getNumber()->willReturn(self::ORDER_NUMBER);
        $order->getNotes()->willReturn();
        $order->getTotal()->willReturn(self::ORDER_VALUE);
        $shippingGateway->getConfigValue('billing_account_number')->willReturn(self::ACCOUNT_NUMBER);

        $addressType = new adresType();
        $addressType->kraj = self::US_COUNTRY_CODE;

        $this->createNew(
            $addressType,
            $shippingGateway,
            $guid,
            $shipmentInterface
        )->shouldBeLike($this->getExpectedResultForeignPackageWithCashOnDelivery());
    }

    function it_should_create_domestic_package_with_stripe_checkout(
        ShipmentInterface $shipmentInterface,
        OrderInterface $order,
        AddressInterface $address,
        PaymentChecker $paymentChecker,
        ShippingGatewayInterface $shippingGateway
    ): void {
        $guid = self::GUID;
        $shipmentInterface->getOrder()->willReturn($order);
        $order->getShippingAddress()->willReturn($address);
        $address->getCountryCode()->willReturn(self::PL_COUNTRY_CODE);
        $paymentChecker->isCashOnDelivery($order, $shippingGateway)->willReturn(false);
        $shipmentInterface->getShippingWeight()->willReturn('5000.0');
        $order->getNumber()->willReturn(self::ORDER_NUMBER);
        $order->getNotes()->willReturn();

        $addressType = new adresType();
        $addressType->kraj = self::PL_COUNTRY_CODE;

        $this->createNew(
            $addressType,
            $shippingGateway,
            $guid,
            $shipmentInterface
        )->shouldBeLike($this->getExpectedResultDomesticPackageWithStripeCheckout());
    }

    function it_should_create_domestic_package_with_cash_on_delivery(
        ShipmentInterface $shipmentInterface,
        OrderInterface $order,
        AddressInterface $address,
        PaymentChecker $paymentChecker,
        ShippingGatewayInterface $shippingGateway,
        adresType $addressType
    ): void {
        $guid = self::GUID;
        $shipmentInterface->getOrder()->willReturn($order);
        $order->getShippingAddress()->willReturn($address);
        $address->getCountryCode()->willReturn(self::PL_COUNTRY_CODE);
        $paymentChecker->isCashOnDelivery($order, $shippingGateway)->willReturn(true);
        $shipmentInterface->getShippingWeight()->willReturn('5000.0');
        $order->getNumber()->willReturn(self::ORDER_NUMBER);
        $order->getNotes()->willReturn();
        $order->getTotal()->willReturn(self::ORDER_VALUE);
        $shippingGateway->getConfigValue('billing_account_number')->willReturn(self::ACCOUNT_NUMBER);

        $addressType = new adresType();
        $addressType->kraj = self::PL_COUNTRY_CODE;

        $this->createNew(
            $addressType,
            $shippingGateway,
            $guid,
            $shipmentInterface
        )->shouldBeLike($this->getExpectedResultDomesticPackageWithCashOnDelivery());
    }

    private function getExpectedResultForeignPackageWithStripeCheckout(): przesylkaPoleconaZagranicznaType
    {
        $address = new adresType();
        $address->kraj = 'US';

        $package = new przesylkaPoleconaZagranicznaType();
        $package->masa = 500000.0;
        $package->adres = $address;
        $package->nadawca = $address;
        $package->guid = '3C974A6AF0956F5A386A34A2960E6645';
        $package->opis = '0000000000001 | ';
        $package->gabaryt = gabarytBiznesowaType::M;

        return $package;
    }

    private function getExpectedResultForeignPackageWithCashOnDelivery(): przesylkaPoleconaZagranicznaType
    {
        $address = new adresType();
        $address->kraj = 'US';

        $cashOnDelivery = new pobranieType();
        $cashOnDelivery->kwotaPobrania = '100';
        $cashOnDelivery->nrb = '1234';
        $cashOnDelivery->sposobPobrania = sposobPobraniaType::RACHUNEK_BANKOWY;
        $cashOnDelivery->tytulem = '0000000000001';

        $package = new przesylkaPoleconaZagranicznaType();
        $package->masa = 500000.0;
        $package->pobranie = $cashOnDelivery;
        $package->adres = $address;
        $package->nadawca = $address;
        $package->guid = '3C974A6AF0956F5A386A34A2960E6645';
        $package->opis = '0000000000001 | ';
        $package->gabaryt = gabarytBiznesowaType::M;

        return $package;
    }

    private function getExpectedResultDomesticPackageWithStripeCheckout(): przesylkaBiznesowaType
    {
        $address = new adresType();
        $address->kraj = 'PL';

        $package = new przesylkaBiznesowaType();
        $package->masa = 500000.0;
        $package->adres = $address;
        $package->nadawca = $address;
        $package->guid = '3C974A6AF0956F5A386A34A2960E6645';
        $package->opis = '0000000000001 | ';
        $package->gabaryt = gabarytBiznesowaType::M;

        return $package;
    }

    private function getExpectedResultDomesticPackageWithCashOnDelivery(): przesylkaBiznesowaType
    {
        $address = new adresType();
        $address->kraj = 'PL';

        $cashOnDelivery = new pobranieType();
        $cashOnDelivery->kwotaPobrania = '100';
        $cashOnDelivery->nrb = '1234';
        $cashOnDelivery->sposobPobrania = sposobPobraniaType::RACHUNEK_BANKOWY;
        $cashOnDelivery->tytulem = '0000000000001';

        $package = new przesylkaBiznesowaType();
        $package->masa = 500000.0;
        $package->pobranie = $cashOnDelivery;
        $package->adres = $address;
        $package->nadawca = $address;
        $package->guid = '3C974A6AF0956F5A386A34A2960E6645';
        $package->opis = '0000000000001 | ';
        $package->gabaryt = gabarytBiznesowaType::M;

        return $package;
    }
}
