<?php

namespace BitBag\PocztaPolskaShippingExportPlugin\EventListener;

use BitBag\PocztaPolskaShippingExportPlugin\Api\SoapClientInterface;
use BitBag\PocztaPolskaShippingExportPlugin\Api\WebClientInterface;
use BitBag\SyliusShippingExportPlugin\Event\ExportShipmentEvent;
use PocztaPolska\addressLabelContent;
use PocztaPolska\addShipment;
use PocztaPolska\adresType;
use PocztaPolska\ElektronicznyNadawca;
use PocztaPolska\gabarytType;
use PocztaPolska\getAddresLabelByGuid;
use PocztaPolska\kategoriaType;
use PocztaPolska\paczkaPocztowaType;

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
            $E = new ElektronicznyNadawca("https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl", ['login' => 'admin@folkstar.pl', 'password' => '111Czerwiec2018']);
            $P = new paczkaPocztowaType();
            $A = new adresType();
            $tmp = new addShipment();
            $A->nazwa = "Jan";
            $A->nazwa2 = "Nowak";
            $A->ulica = "Śliska";
            $A->numerDomu = "1";
            $A->numerLokalu = "2";
            $A->miejscowosc = "Warszawa";
            $A->kodPocztowy = "00002";
            $P->adres = $A;
            $P->iloscPotwierdzenOdbioru = 1;
            $P->kategoria = kategoriaType::EKONOMICZNA;
            $P->gabaryt = gabarytType::GABARYT_A;
            $P->masa = 1230;
            mt_srand((double)microtime()*10000);
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $guid = substr($charid, 0, 32);
            $P->guid = $guid;
            $tmp->przesylki[] = $P;
            $E->addShipment($tmp);

            $parameters = new getAddresLabelByGuid();
            $parameters->guid = array($guid);
            $retval = $E->getAddresLabelByGuid($parameters);
            if(!is_array($retval->content))
            {
                $retval->content = array($retval->content);
            }
            $pdf = null;
            foreach ($retval->content as $c) /* @var $c addressLabelContent */
            {
                $pdf = $c->pdfContent;
            }

        } catch (\Exception $exception) {
            $exportShipmentEvent->addErrorFlash(sprintf(
                "Poczta polska Web Service for #%s order: %s",
                $shipment->getOrder()->getNumber(),
                $exception->getMessage()));

            return;
        }

        $exportShipmentEvent->saveShippingLabel($pdf, 'pdf');
        $exportShipmentEvent->addSuccessFlash();
        $exportShipmentEvent->exportShipment();
    }
}
