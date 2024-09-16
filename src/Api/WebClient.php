<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\AddressFactoryInterface;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\LabelParametersFactoryInterface;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\PackageFactoryInterface;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\ShipmentFactoryInterface;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator\GuidGeneratorInterface;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\ElektronicznyNadawca;
use PocztaPolska\getAddresLabelByGuidResponse;
use PocztaPolska\getEnvelopeBufor;
use PocztaPolska\getUrzedyNadania;
use PocztaPolska\sendEnvelope;
use SoapFault;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;

final class WebClient implements WebClientInterface
{
    private ShippingGatewayInterface $shippingGateway;

    private ShipmentInterface $shipment;

    private ElektronicznyNadawca $connection;

    private GuidGeneratorInterface $guidGenerator;

    private LabelParametersFactoryInterface $labelParametersFactory;

    private ShipmentFactoryInterface $shipmentFactory;

    private AddressFactoryInterface $addressFactory;

    private PackageFactoryInterface $packageFactory;

    public function __construct(
        GuidGeneratorInterface $guidGenerator,
        LabelParametersFactoryInterface $labelParametersFactory,
        ShipmentFactoryInterface $shipmentFactory,
        AddressFactoryInterface $addressFactory,
        PackageFactoryInterface $packageFactory,
    ) {
        $this->guidGenerator = $guidGenerator;
        $this->labelParametersFactory = $labelParametersFactory;
        $this->shipmentFactory = $shipmentFactory;
        $this->addressFactory = $addressFactory;
        $this->packageFactory = $packageFactory;
    }

    public function setShippingGateway(ShippingGatewayInterface $shippingGateway): void
    {
        $this->shippingGateway = $shippingGateway;
    }

    public function setShipment(ShipmentInterface $shipment): void
    {
        $this->shipment = $shipment;
    }

    /**
     * @throws SoapFault
     */
    public function createLabel(): getAddresLabelByGuidResponse
    {
        $this->connection = $this->connect();
        $guid = $this->guidGenerator->generate();

        $package = $this->packageFactory->createNew(
            $this->addressFactory->createNew($this->getOrder()),
            $this->shippingGateway,
            $guid,
            $this->shipment,
        );

        $this->connection->addShipment($this->shipmentFactory->createNew($package));

        return $this->connection->getAddresLabelByGuid($this->labelParametersFactory->createNew($guid));
    }

    public function getLabelContent(): ?string
    {
        return base64_decode((string) $this->createLabel()->content->pdfContent);
    }

    /**
     * @throws SoapFault
     */
    public function sendEnvelope(): array
    {
        $this->connection = $this->connect();

        $packages = $this->connection->getEnvelopeBufor(new getEnvelopeBufor())->przesylka;

        $packagesShipped = [];

        if (is_array($packages)) {
            foreach ($packages as $package) {
                $packagesShipped[] = $package->guid;
            }
        } elseif (null !== $packages) {
            $packagesShipped[] = $packages->guid;
        } else {
            return [];
        }

        $posts = $this->connection->getUrzedyNadania(new getUrzedyNadania());
        $post = is_array($posts) ? $posts->urzedyNadania[0] : $posts;

        $sendEnvelope = new sendEnvelope();
        $sendEnvelope->urzadNadania = $post->urzadNadania;

        $sendEnvelopeResponseType = $this->connection->sendEnvelope($sendEnvelope);

        if (null === $sendEnvelopeResponseType->error) {
            return $packagesShipped;
        }

        return [];
    }

    /**
     * @throws SoapFault
     */
    private function connect(): ElektronicznyNadawca
    {
        return new ElektronicznyNadawca(
            $this->getShippingGatewayConfig('wsdl'),
            [
                'login' => $this->getShippingGatewayConfig('login'),
                'password' => $this->getShippingGatewayConfig('password'),
            ],
        );
    }

    private function getOrder(): OrderInterface
    {
        return $this->shipment->getOrder();
    }

    /** @return mixed */
    private function getShippingGatewayConfig($config)
    {
        return $this->shippingGateway->getConfigValue($config);
    }
}
