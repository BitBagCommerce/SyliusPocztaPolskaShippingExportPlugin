<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace spec\BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator\FileNameGenerator;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator\FileNameGeneratorInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingExportInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;

final class FileNameGeneratorSpec extends ObjectBehavior
{
    private const ORDER_NUMBER = '0000000000001';

    private const SHIPMENT_ID = '1';

    function it_is_initializable(): void
    {
        $this->shouldHaveType(FileNameGenerator::class);
        $this->shouldImplement(FileNameGeneratorInterface::class);
    }

    function it_throw_exception_if_shipment_is_null(
        ShippingExportInterface $shippingExport
    ): void {
        $shippingExport->getShipment()->willReturn(null);

        $this->shouldThrow(\InvalidArgumentException::class)
            ->during('generate', [$shippingExport]);
    }

    function it_throw_exception_if_order_is_null(
        ShippingExportInterface $shippingExport,
        ShipmentInterface $shipment
    ): void {
        $shippingExport->getShipment()->willReturn($shipment);
        $shipment->getOrder()->willReturn(null);

        $this->shouldThrow(\InvalidArgumentException::class)
            ->during('generate', [$shippingExport]);
    }

    function it_returns_file_name(
        ShippingExportInterface $shippingExport,
        ShipmentInterface $shipment,
        OrderInterface $order
    ): void {
        $shippingExport->getShipment()->willReturn($shipment);
        $shipment->getOrder()->willReturn($order);
        $order->getNumber()->willReturn(self::ORDER_NUMBER);
        $shipment->getId()->willReturn(self::SHIPMENT_ID);

        $this->generate($shippingExport)
            ->shouldReturn(self::SHIPMENT_ID . '_' . self::ORDER_NUMBER);
    }
}
