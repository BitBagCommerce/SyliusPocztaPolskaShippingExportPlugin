<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace Tests\BitBag\SyliusPocztaPolskaShippingExportPlugin\Behat\Mocker;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Api\SoapClientInterface;
use Sylius\Behat\Service\Mocker\MockerInterface;

class PocztaPolskaApiMocker
{
    /** @var MockerInterface */
    private $mocker;

    /**
     * PocztaPolskaApiMocker constructor.
     */
    public function __construct(MockerInterface $mocker)
    {
        $this->mocker = $mocker;
    }

    public function performActionInApiSuccessfulScope(callable $action)
    {
        $this->mockApiSuccessfulPocztaPolskaResponse();
        $action();
        $this->mocker->unmockAll();
    }

    private function mockApiSuccessfulPocztaPolskaResponse()
    {
        $createShipmentResult = (object) [
            'createShipmentResult' => (object) [
                'label' => (object) [
                    'labelContent' => 'test',
                    'labelType' => 't',
                ],
            ],
        ];

        $this
            ->mocker
            ->mockService(
                'bitbag.poczta_polska_shipping_export_plugin.api.soap_client',
                SoapClientInterface::class,
            )
            ->shouldReceive('createShipment')
            ->andReturn($createShipmentResult)
        ;
    }
}
