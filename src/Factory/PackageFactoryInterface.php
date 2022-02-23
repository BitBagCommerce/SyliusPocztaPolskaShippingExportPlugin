<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
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
        ShippingGatewayInterface
        $shippingGateway,
        string $guid,
        ShipmentInterface $shipmentInterface
    ): object;
}
