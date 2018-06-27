<?php

namespace BitBag\PocztaPolskaShippingExportPlugin\Api;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use Sylius\Component\Core\Model\ShipmentInterface;

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

}
