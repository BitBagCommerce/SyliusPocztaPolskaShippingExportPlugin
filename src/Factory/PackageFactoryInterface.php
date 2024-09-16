<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\adresType;
use Sylius\Component\Core\Model\ShipmentInterface;

interface PackageFactoryInterface
{
    public function createNew(
        AdresType $addressType,
        ShippingGatewayInterface $shippingGateway,
        string $guid,
        ShipmentInterface $shipmentInterface,
    ): object;
}
