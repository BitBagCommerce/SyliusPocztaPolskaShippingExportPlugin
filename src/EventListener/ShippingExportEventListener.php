<?php

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\EventListener;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Api\SoapClientInterface;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Api\WebClientInterface;
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
            $label = $this->webClient->createLabel();
        } catch (\Exception $exception) {
            $exportShipmentEvent->addErrorFlash(sprintf(
                "Poczta polska Web Service for #%s order: %s",
                $shipment->getOrder()->getNumber(),
                $exception->getMessage()));

            return;
        }
//      TODO: Add setTracking to ShippingExportPlugin
//      $shipment->setTracking($label->content->nrNadania);

        $exportShipmentEvent->saveShippingLabel($label->content->pdfContent, 'pdf');
        $exportShipmentEvent->addSuccessFlash();
        $exportShipmentEvent->exportShipment();
    }
}
