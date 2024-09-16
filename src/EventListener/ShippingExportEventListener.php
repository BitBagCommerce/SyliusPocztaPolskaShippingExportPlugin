<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
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
use Symfony\Component\HttpFoundation\RequestStack;
use Webmozart\Assert\Assert;

final class ShippingExportEventListener
{
    public const POCZTA_POLSKA_GATEWAY_CODE = 'poczta_polska';

    private Filesystem $filesystem;

    private ShippingExportRepository $shippingExportRepository;

    private string $shippingLabelsPath;

    private WebClientInterface $webClient;

    private RequestStack $requestStack;

    private FileNameGeneratorInterface $fileNameGenerator;

    public function __construct(
        Filesystem $filesystem,
        ShippingExportRepository $shippingExportRepository,
        string $shippingLabelsPath,
        WebClientInterface $webClient,
        RequestStack $requestStack,
        fileNameGeneratorInterface $fileNameGenerator,
    ) {
        $this->filesystem = $filesystem;
        $this->shippingExportRepository = $shippingExportRepository;
        $this->shippingLabelsPath = $shippingLabelsPath;
        $this->webClient = $webClient;
        $this->requestStack = $requestStack;
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

        $flashBag = $this->requestStack->getSession()->getBag('flashes');

        try {
            $this->webClient->setShippingGateway($shippingGateway);
            $this->webClient->setShipment($shipment);

            $this->webClient->createLabel();

            $labelContent = $this->webClient->getLabelContent();
            Assert::notNull($labelContent);

            $this->saveShippingLabel($shippingExport, $labelContent, 'pdf');
        } catch (SoapFault $exception) {
            $flashBag->add(
                'error',
                sprintf(
                    'Poczta Polska Web Service for #%s order: %s',
                    $shipment->getOrder()->getNumber(),
                    $exception->getMessage(),
                ),
            );

            return;
        }
        $flashBag->add('success', 'bitbag.ui.shipment_data_has_been_exported');
        $this->markShipmentAsExported($shippingExport);
    }

    public function saveShippingLabel(
        ShippingExportInterface $shippingExport,
        string $labelContent,
        string $labelExtension,
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
