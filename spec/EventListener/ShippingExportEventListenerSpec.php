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
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator\FileNameGeneratorInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingExportInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use BitBag\SyliusShippingExportPlugin\Repository\ShippingExportRepository;
use PhpSpec\ObjectBehavior;
use PocztaPolska\getAddresLabelByGuidResponse;
use Prophecy\Argument;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

final class ShippingExportEventListenerSpec extends ObjectBehavior
{
    private const ORDER_NUMBER = '0000000000001';

    private const SHIPMENT_ID = '1';

    private const EXCEPTION_MESSAGE = 'error';

    private const PP_GATEWAY_CODE = 'poczta_polska';

    function let(
        Filesystem $filesystem,
        ShippingExportRepository $shippingExportRepository,
        WebClientInterface $webClient,
        RequestStack $requestStack,
        FileNameGeneratorInterface $fileNameGenerator
    ): void {
        $shippingLabelsPath = 'labels';
        $this->beConstructedWith(
            $filesystem,
            $shippingExportRepository,
            $shippingLabelsPath,
            $webClient,
            $requestStack,
            $fileNameGenerator
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ShippingExportEventListener::class);
    }

    function it_exports_shipment_successfully(
        ResourceControllerEvent $event,
        ShippingGatewayInterface $shippingGateway,
        ShipmentInterface $shipment,
        WebClientInterface $webClient,
        ShippingExportInterface $shippingExport,
        OrderInterface $order,
        FileNameGeneratorInterface $fileNameGenerator,
        RequestStack $requestStack,
        SessionInterface $session,
        FlashBagInterface $flashBag,
        getAddresLabelByGuidResponse $guidResponse
    ): void {
        $event->getSubject()->willReturn($shippingExport);
        $shippingExport->getShippingGateway()->willReturn($shippingGateway);
        $shippingExport->getShipment()->willReturn($shipment);
        $shippingGateway->getCode()->willReturn(self::PP_GATEWAY_CODE);
        $webClient->getLabelContent()->willReturn('Label content');
        $fileNameGenerator
            ->generate($shippingExport)
            ->willReturn(self::SHIPMENT_ID . '_' . self::ORDER_NUMBER);
        $webClient->createLabel()->willReturn($guidResponse);

        $webClient->setShippingGateway($shippingGateway)->shouldBeCalled();
        $webClient->setShipment($shipment)->shouldBeCalled();
        $shippingExport->setState(ShippingExportInterface::STATE_EXPORTED)->shouldBeCalled();
        $shippingExport->setLabelPath(
            sprintf(
                'labels/%s_%s.pdf',
                self::SHIPMENT_ID,
                self::ORDER_NUMBER
            )
        )->shouldBeCalled();
        $requestStack->getSession()->willReturn($session);
        $session->getBag('flashes')->willReturn($flashBag);
        $flashBag->add(
            'success',
            'bitbag.ui.shipment_data_has_been_exported'
        )->shouldBeCalled();

        /** @var \DateTime $date */
        $date = Argument::type(\DateTime::class);
        $shippingExport->setExportedAt($date)->shouldBeCalled();

        $this->exportShipment($event);
    }

    function it_returns_null_when_code_is_wrong(
        ShippingGatewayInterface $shippingGateway,
        ResourceControllerEvent $event,
        ShippingExportInterface $shippingExport,
        ShipmentInterface $shipment
    ): void {
        $event->getSubject()->willReturn($shippingExport);
        $shippingExport->getShippingGateway()->willReturn($shippingGateway);
        $shippingExport->getShipment()->willReturn($shipment);
        $shippingGateway->getCode()->willReturn('other_code');

        $this->exportShipment($event)->shouldReturn(null);
    }

    function it_should_handle_exception_when_webclient_fails(
        ResourceControllerEvent $event,
        ShippingGatewayInterface $shippingGateway,
        ShipmentInterface $shipment,
        WebClientInterface $webClient,
        ShippingExportInterface $shippingExport,
        OrderInterface $order,
        RequestStack $requestStack,
        SessionInterface $session,
        FlashBagInterface $flashBag
    ): void {
        $event->getSubject()->willReturn($shippingExport);
        $shippingExport->getShippingGateway()->willReturn($shippingGateway);
        $shippingExport->getShipment()->willReturn($shipment);
        $shippingGateway->getCode()
            ->willReturn(ShippingExportEventListener::POCZTA_POLSKA_GATEWAY_CODE);
        $shipment->getOrder()->willReturn($order);
        $order->getNumber()->willReturn(self::ORDER_NUMBER);
        $shipment->getId()->willReturn(self::SHIPMENT_ID);
        $webClient->createLabel()->willThrow(new \SoapFault('Client', self::EXCEPTION_MESSAGE));

        $webClient->setShippingGateway($shippingGateway)->shouldBeCalled();
        $webClient->setShipment($shipment)->shouldBeCalled();

        $requestStack->getSession()->willReturn($session);
        $session->getBag('flashes')->willReturn($flashBag);
        $flashBag->add(
            'error',
            sprintf(
                'Poczta Polska Web Service for #%s order: %s',
                self::ORDER_NUMBER,
                self::EXCEPTION_MESSAGE
            )
        )->shouldBeCalled();

        $this->exportShipment($event);
    }

    function it_throws_exception_when_its_not_instance_of_interface(
        ResourceControllerEvent $event
    ): void {
        $event->getSubject()->willReturn('');

        $this->shouldThrow(\InvalidArgumentException::class)
            ->during('exportShipment', [$event]);
    }

    function it_throw_exception_if_shipping_export_is_null(
        ResourceControllerEvent $event,
        ShippingExportInterface $shippingExport
    ): void {
        $event->getSubject()->willReturn($shippingExport);
        $shippingExport->getShippingGateway()->willReturn(null);

        $this->shouldThrow(\InvalidArgumentException::class)
            ->during('exportShipment', [$event]);
    }

    function it_throws_exception_if_shipment_is_null(
        ShippingGatewayInterface $shippingGateway,
        ResourceControllerEvent $event,
        ShippingExportInterface $shippingExport
    ): void {
        $event->getSubject()->willReturn($shippingExport);
        $shippingExport->getShippingGateway()->willReturn($shippingGateway);
        $shippingExport->getShipment()->willReturn(null);

        $this->shouldThrow(\InvalidArgumentException::class)
            ->during('exportShipment', [$event]);
    }
}
