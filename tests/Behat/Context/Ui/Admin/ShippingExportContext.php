<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace Tests\BitBag\SyliusPocztaPolskaShippingExportPlugin\Behat\Context\Ui\Admin;

use Behat\Behat\Context\Context;
use Tests\BitBag\SyliusPocztaPolskaShippingExportPlugin\Behat\Mocker\PocztaPolskaApiMocker;
use Tests\BitBag\SyliusShippingExportPlugin\Behat\Page\Admin\ShippingExport\IndexPageInterface;

final class ShippingExportContext implements Context
{
    /** @var IndexPageInterface */
    private $indexPage;

    /** @var PocztaPolskaApiMocker */
    private $PocztaPolskaApiMocker;

    public function __construct(
        IndexPageInterface $indexPage,
        PocztaPolskaApiMocker $PocztaPolskaApiMocker,
    ) {
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
