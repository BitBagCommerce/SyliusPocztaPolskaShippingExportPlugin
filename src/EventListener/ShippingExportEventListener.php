<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\EventListener;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Api\WebClientInterface;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator\FileNameGeneratorInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingExportInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use BitBag\SyliusShippingExportPlugin\Repository\ShippingExportRepository;
use DateTime;
use SoapFault;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Webmozart\Assert\Assert;

final class ShippingExportEventListener
{
    public const POCZTA_POLSKA_GATEWAY_CODE = 'poczta_polska';

    private Filesystem $filesystem;

    private ShippingExportRepository $shippingExportRepository;

    private string $shippingLabelsPath;

    private WebClientInterface $webClient;

    private FlashBagInterface $flashBag;

    private FileNameGeneratorInterface $fileNameGenerator;

    public function __construct(
        Filesystem $filesystem,
        ShippingExportRepository $shippingExportRepository,
        string $shippingLabelsPath,
        WebClientInterface $webClient,
        FlashBagInterface $flashBag,
        fileNameGeneratorInterface $fileNameGenerator
    ) {
        $this->filesystem = $filesystem;
        $this->shippingExportRepository = $shippingExportRepository;
        $this->shippingLabelsPath = $shippingLabelsPath;
        $this->webClient = $webClient;
        $this->flashBag = $flashBag;
        $this->fileNameGenerator = $fileNameGenerator;
    }

    public function exportShipment(ResourceControllerEvent $event): void
    {
        /** @var ShippingExportInterface $shippingExport */
        $shippingExport = $event->getSubject();
        Assert::isInstanceOf($shippingExport, ShippingExportInterface::class);

        /** @var ShippingGatewayInterface $shippingGateway */
        $shippingGateway = $shippingExport->getShippingGateway();
        Assert::notNull($shippingGateway);

        $shipment = $shippingExport->getShipment();
        Assert::notNull($shipment);

        if (self::POCZTA_POLSKA_GATEWAY_CODE !== $shippingGateway->getCode()) {
            return;
        }

        try {
            $this->webClient->setShippingGateway($shippingGateway);
            $this->webClient->setShipment($shipment);

            $this->webClient->createLabel();

            $labelContent = $this->webClient->getLabelContent();
            Assert::notNull($labelContent);

            $this->saveShippingLabel($shippingExport, $labelContent, 'pdf');
        } catch (SoapFault $exception) {
            $this->flashBag->add(
                'error',
                sprintf(
                    'Poczta Polska Web Service for #%s order: %s',
                    $shipment->getOrder()->getNumber(),
                    $exception->getMessage()
                )
            );

            return;
        }

        $this->flashBag->add('success', 'bitbag.ui.shipment_data_has_been_exported');
        $this->markShipmentAsExported($shippingExport);
    }

    public function saveShippingLabel(
        ShippingExportInterface $shippingExport,
        string $labelContent,
        string $labelExtension
    ): void {
        $labelPath = $this->shippingLabelsPath
            . '/' . $this->fileNameGenerator->generate($shippingExport)
            . '.' . $labelExtension;

        $this->filesystem->dumpFile($labelPath, $labelContent);
        $shippingExport->setLabelPath($labelPath);

        $this->shippingExportRepository->add($shippingExport);
    }

    private function markShipmentAsExported(ShippingExportInterface $shippingExport): void
    {
        $shippingExport->setState(ShippingExportInterface::STATE_EXPORTED);
        $shippingExport->setExportedAt(new DateTime());

        $this->shippingExportRepository->add($shippingExport);
    }
}
