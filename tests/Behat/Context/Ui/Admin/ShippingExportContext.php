<?php

namespace Tests\BitBag\SyliusPocztaPolskaShippingExportPlugin\Behat\Context\Ui\Admin;

use Behat\Behat\Context\Context;
use Tests\BitBag\SyliusPocztaPolskaShippingExportPlugin\Behat\Mocker\PocztaPolskaApiMocker;
use Tests\BitBag\SyliusShippingExportPlugin\Behat\Page\Admin\ShippingExport\IndexPageInterface;

final class ShippingExportContext implements Context
{
    /**
     * @var IndexPageInterface
     */
    private $indexPage;

    /**
     * @var PocztaPolskaApiMocker
     */
    private $PocztaPolskaApiMocker;

    /**
     * @param IndexPageInterface $indexPage
     * @param PocztaPolskaApiMocker $PocztaPolskaApiMocker
     */
    public function __construct(
        IndexPageInterface $indexPage,
        PocztaPolskaApiMocker $PocztaPolskaApiMocker
    )
    {
        $this->PocztaPolskaApiMocker = $PocztaPolskaApiMocker;
        $this->indexPage = $indexPage;
    }

    /**
     * @When I export all new shipments to poczta polska api
     */
    public function iExportAllNewShipments()
    {
        $this->PocztaPolskaApiMocker->performActionInApiSuccessfulScope(function () {
            $this->indexPage->exportAllShipments();
        });
    }

    /**
     * @When I export first shipment to poczta polska api
     */
    public function iExportFirsShipments()
    {
        $this->PocztaPolskaApiMocker->performActionInApiSuccessfulScope(function () {
            $this->indexPage->exportFirsShipment();
        });
    }
}
