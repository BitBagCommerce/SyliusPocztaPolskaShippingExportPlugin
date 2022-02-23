<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace spec\BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\ShipmentFactory;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\ShipmentFactoryInterface;
use PhpSpec\ObjectBehavior;
use PocztaPolska\addShipment;
use PocztaPolska\adresType;
use PocztaPolska\przesylkaBiznesowaType;
use PocztaPolska\przesylkaPoleconaZagranicznaType;

class ShipmentFactorySpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(ShipmentFactory::class);
        $this->shouldImplement(ShipmentFactoryInterface::class);
    }

    function it_create_add_shipment_type_foreign_package(): void
    {
        $package = $this->getForeignPackageData();

        $this->createNew($package)
            ->shouldBeLike($this->getExpectedResultForeignPackage());
    }

    function it_create_add_shipment_type_domestic_package(): void
    {
        $package = $this->getDomesticPackageData();

        $this->createNew($package)
            ->shouldBeLike($this->getExpectedResultDomesticPackage());
    }

    private function getExpectedResultForeignPackage(): addShipment
    {
        $address = new adresType();

        $package = new przesylkaPoleconaZagranicznaType();
        $package->adres = $address;

        $shipment = new addShipment();
        $shipment->przesylki[] = $package;

        return $shipment;
    }

    private function getExpectedResultDomesticPackage(): addShipment
    {
        $address = new adresType();

        $package = new przesylkaBiznesowaType();
        $package->adres = $address;

        $shipment = new addShipment();
        $shipment->przesylki[] = $package;

        return $shipment;
    }

    private function getForeignPackageData(): przesylkaPoleconaZagranicznaType
    {
        $address = new adresType();

        $package = new przesylkaPoleconaZagranicznaType();
        $package->adres = $address;

        return $package;
    }

    private function getDomesticPackageData(): przesylkaBiznesowaType
    {
        $address = new adresType();

        $package = new przesylkaBiznesowaType();
        $package->adres = $address;

        return $package;
    }


}
