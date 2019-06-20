<?php

namespace Tests\BitBag\SyliusPocztaPolskaShippingExportPlugin\Behat\Mocker;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Api\SoapClientInterface;
use Sylius\Behat\Service\Mocker\MockerInterface;

class PocztaPolskaApiMocker
{
    /**
     * @var MockerInterface
     */
    private $mocker;

    /**
     * PocztaPolskaApiMocker constructor.
     * @param MockerInterface $mocker
     */
    public function __construct(MockerInterface $mocker)
    {
        $this->mocker = $mocker;
    }

    /**
     * @param callable $action
     */
    public function performActionInApiSuccessfulScope(callable $action)
    {
        $this->mockApiSuccessfulPocztaPolskaResponse();
        $action();
        $this->mocker->unmockAll();

    }

    private function mockApiSuccessfulPocztaPolskaResponse()
    {
        $createShipmentResult = (object)[
            'createShipmentResult' => (object)[
                'label' => (object)[
                    'labelContent' => 'test',
                    'labelType' => 't'
                ]
            ],
        ];

        $this
            ->mocker
            ->mockService(
                'bitbag.poczta_polska_shipping_export_plugin.api.soap_client',
                SoapClientInterface::class
            )
            ->shouldReceive('createShipment')
            ->andReturn($createShipmentResult)
        ;
    }
}
