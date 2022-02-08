<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use SoapFault;
use Sylius\Component\Core\Model\ShipmentInterface;
use PocztaPolska\getAddresLabelByGuidResponse;

interface WebClientInterface
{
    public function setShippingGateway(ShippingGatewayInterface $shippingGateway): void;

    public function setShipment(ShipmentInterface $shipment): void;

    /** @throws SoapFault */
    public function createLabel(): getAddresLabelByGuidResponse;

    public function sendEnvelope(): array;

    public function getLabelContent(): ?string;
}
