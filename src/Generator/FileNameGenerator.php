<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingExportInterface;
use Webmozart\Assert\Assert;

class FileNameGenerator implements FileNameGeneratorInterface
{
    public function generate(ShippingExportInterface $shippingExport): string
    {
        $shipment = $shippingExport->getShipment();
        Assert::notNull($shipment);

        $order = $shipment->getOrder();
        Assert::notNull($order);

        $orderNumber = $order->getNumber();

        $shipmentId = $shipment->getId();

        return implode(
            '_',
            [
                $shipmentId,
                preg_replace('~[^A-Za-z0-9]~', '', $orderNumber),
            ],
        );
    }
}
