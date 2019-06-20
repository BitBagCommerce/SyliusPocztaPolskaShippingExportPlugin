<?php

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use Sylius\Component\Core\Model\ShipmentInterface;
use PocztaPolska\getAddresLabelByGuidResponse;

interface WebClientInterface
{
    /**
     * @param ShippingGatewayInterface $shippingGateway
     *
     * @return mixed
     */
    public function setShippingGateway(ShippingGatewayInterface $shippingGateway);

    /**
     * @param ShipmentInterface $shipment
     *
     * @return mixed
     */
    public function setShipment(ShipmentInterface $shipment);

    /**
     * @return getAddresLabelByGuidResponse
     */
    public function createLabel();

    /**
     * @return array
     */
    public function sendEnvelope();
}
