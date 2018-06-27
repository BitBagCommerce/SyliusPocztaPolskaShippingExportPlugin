<?php

namespace BitBag\PocztaPolskaShippingExportPlugin\EventListener;

use BitBag\PocztaPolskaShippingExportPlugin\Api\SoapClientInterface;
use BitBag\PocztaPolskaShippingExportPlugin\Api\WebClientInterface;
use BitBag\SyliusShippingExportPlugin\Event\ExportShipmentEvent;

final class ShippingExportEventListener
{
    const POCZTA_POLSKA_GATEWAY_CODE = 'poczta_polska';
    const BASE_LABEL_EXTENSION = 'pdf';

    /**
     * @var WebClientInterface
     */
    private $webClient;

    private $soapClient;

    /**
     * @param WebClientInterface $webClient
     * @param SoapClientInterface $soapClient
     */
    public function __construct(WebClientInterface $webClient, SoapClientInterface $soapClient)
    {
        $this->webClient = $webClient;
        $this->soapClient = $soapClient;
    }

    /**
     * @param ExportShipmentEvent $exportShipmentEvent
     */
    public function exportShipment(ExportShipmentEvent $exportShipmentEvent)
    {
        $shippingExport = $exportShipmentEvent->getShippingExport();
        $shippingGateway = $shippingExport->getShippingGateway();

        if ($shippingGateway->getCode() !== self::POCZTA_POLSKA_GATEWAY_CODE) {
            return;
        }

        $shipment = $shippingExport->getShipment();

        $this->webClient->setShippingGateway($shippingGateway);
        $this->webClient->setShipment($shipment);

        try {


        } catch (\Exception $exception) {
            $exportShipmentEvent->addErrorFlash(sprintf(
                "Poczta polska Web Service for #%s order: %s",
                $shipment->getOrder()->getNumber(),
                $exception->getMessage()));

            return;
        }

        $exportShipmentEvent->saveShippingLabel('FILE_FROM_WSDL', 'pdf');
        $exportShipmentEvent->addSuccessFlash();
        $exportShipmentEvent->exportShipment();
    }
}
