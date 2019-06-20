<?php

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Api;

interface SoapClientInterface
{
    public function createShipment(array $requestData, $wsdl);
}
