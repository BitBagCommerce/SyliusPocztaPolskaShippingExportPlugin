<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use PocztaPolska\getAddresLabelByGuidResponse;
use SoapFault;
use Sylius\Component\Core\Model\ShipmentInterface;

interface WebClientInterface
{
    public function setShippingGateway(ShippingGatewayInterface $shippingGateway): void;

    public function setShipment(ShipmentInterface $shipment): void;

    /** @throws SoapFault */
    public function createLabel(): getAddresLabelByGuidResponse;

    public function sendEnvelope(): array;

    public function getLabelContent(): ?string;
}
