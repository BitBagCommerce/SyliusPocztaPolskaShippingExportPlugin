<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace spec\BitBag\SyliusPocztaPolskaShippingExportPlugin\EventListener;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Api\WebClientInterface;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\EventListener\ShippingExportEventListener;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingExportInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use BitBag\SyliusShippingExportPlugin\Repository\ShippingExportRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

final class ShippingExportEventListenerSpec extends ObjectBehavior
{
    function let(
        Filesystem $filesystem,
        ShippingExportRepository $shippingExportRepository,
        WebClientInterface $webClient,
        FlashBagInterface $flashBag
    ): void {
        $shippingLabelsPath = 'labels';
        $this->beConstructedWith(
            $filesystem,
            $shippingExportRepository,
            $shippingLabelsPath,
            $webClient,
            $flashBag
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ShippingExportEventListener::class);
    }

    function it_exports_shipment
    (
        ResourceControllerEvent $event,
        ShippingGatewayInterface $shippingGateway,
        ShipmentInterface $shipment,
        WebClientInterface $webClient,
        ShippingExportInterface $shippingExport,
        OrderInterface $order
    ): void {
        $shippingGateway->getCode()->willReturn(ShippingExportEventListener::POCZTA_POLSKA_GATEWAY_CODE);
        $shippingGateway->getConfigValue('wsdl')->willReturn('wsdl');

        $webClient->setShippingGateway($shippingGateway)->shouldBeCalled();
        $webClient->setShipment($shipment)->shouldBeCalled();
        $webClient->createLabel()->shouldBeCalled();
        $shippingExport->setLabelPath('labels/1_1.pdf')->shouldBeCalled();
        $shippingExport->setState(ShippingExportInterface::STATE_EXPORTED)->shouldBeCalled();

        /** @var \DateTime $date */
        $date = Argument::type(\DateTime::class);
        $shippingExport->setExportedAt($date)->shouldBeCalled();

        $event->getSubject()->willReturn($shippingExport);
        $shippingExport->getShippingGateway()->willReturn($shippingGateway);
        $shippingExport->getShipment()->willReturn($shipment);

        $webClient->getLabelContent()->willReturn('Label content');
        $shipment->getOrder()->willReturn($order);
        $order->getNumber()->willReturn(1);
        $shipment->getId()->willReturn(1);
        $this->exportShipment($event);
    }
}
