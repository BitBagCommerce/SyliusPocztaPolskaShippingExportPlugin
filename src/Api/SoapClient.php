<?php

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

final class SoapClient implements SoapClientInterface
{
    public function createShipment(array $requestData, $wsdl)
    {
        $soapClient = new \SoapClient($wsdl);

        return $soapClient->createShipment($requestData);
    }
}
