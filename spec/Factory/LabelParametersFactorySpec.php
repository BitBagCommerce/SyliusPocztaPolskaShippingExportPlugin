<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace spec\BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\LabelParametersFactory;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\LabelParametersFactoryInterface;
use PhpSpec\ObjectBehavior;
use PocztaPolska\getAddresLabelByGuid;

class LabelParametersFactorySpec extends ObjectBehavior
{
    private const GUID = '3C974A6AF0956F5A386A34A2960E6645';

    function it_is_initializable(): void
    {
        $this->shouldHaveType(LabelParametersFactory::class);
        $this->shouldImplement(LabelParametersFactoryInterface::class);
    }

    function it_creates_parameters_for_label(): void
    {
        $guid = self::GUID;

        $this->createNew($guid)
            ->shouldBeLike($this->getExpectedResult());
    }

    private function getExpectedResult(): getAddresLabelByGuid
    {
        $parameters = new getAddresLabelByGuid();
        $parameters->guid = [self::GUID];

        return $parameters;
    }
}
