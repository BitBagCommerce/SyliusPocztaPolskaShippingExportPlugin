<?php

namespace BitBag\PocztaPolskaShippingExportPlugin\Api;

interface SoapClientInterface
{
    public function createShipment(array $requestData, $wsdl);
}
