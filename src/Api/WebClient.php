<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\LabelParametersFactory;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\PackageFactory;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\ShipmentFactory;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\AddressFactory;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator\GuidGenerator;
use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\getAddresLabelByGuidResponse;
use PocztaPolska\getEnvelopeBufor;
use PocztaPolska\getUrzedyNadania;
use PocztaPolska\sendEnvelope;
use SoapFault;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Core\Model\ShipmentInterface;
use PocztaPolska\ElektronicznyNadawca;

final class WebClient implements WebClientInterface
{
    private ShippingGatewayInterface $shippingGateway;

    private ShipmentInterface $shipment;

    private ElektronicznyNadawca $connection;

    private GuidGenerator $guidGenerator;

    private LabelParametersFactory $labelParametersFactory;

    private ShipmentFactory $shipmentFactory;

    private AddressFactory $addressFactory;

    private PackageFactory $packageFactory;

    public function __construct(
        GuidGenerator $guidGenerator,
        LabelParametersFactory $labelParametersFactory,
        ShipmentFactory $shipmentFactory,
        AddressFactory $addressFactory,
        PackageFactory $packageFactory
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
            $this->shipment
        );

        $this->connection->addShipment($this->shipmentFactory->createNew($package));

        return $this->connection->getAddresLabelByGuid($this->labelParametersFactory->createNew($guid));
    }

    public function getLabelContent(): ?string
    {
        return base64_decode((string)$this->createLabel()->content->pdfContent);
    }

    /**
     * @throws SoapFault
     */
    public function sendEnvelope(): array
    {
        $this->connection = $this->connect();

        $packages = $this->connection->getEnvelopeBufor(new getEnvelopeBufor())->przesylka;

        $packagesShipped = [];

        if(is_array($packages)) {
            foreach ($packages as $package) {
                $packagesShipped[] = $package->guid;
            }
        } else if($packages !== null) {
            $packagesShipped[] = $packages->guid;
        } else {
            return [];
        }

        $posts = $this->connection->getUrzedyNadania(new getUrzedyNadania());
        $post = is_array($posts) ? $posts->urzedyNadania[0] : $posts;

        $sendEnvelope = new sendEnvelope();
        $sendEnvelope->urzadNadania = $post->urzadNadania;


        $sendEnvelopeResponseType = $this->connection->sendEnvelope($sendEnvelope);


        if ($sendEnvelopeResponseType->error === null) {
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
                'password' => $this->getShippingGatewayConfig('password')
            ]
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
