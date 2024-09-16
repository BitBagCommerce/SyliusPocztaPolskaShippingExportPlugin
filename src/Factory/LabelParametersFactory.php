<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use PocztaPolska\getAddresLabelByGuid;

class LabelParametersFactory implements LabelParametersFactoryInterface
{
    public function createNew($guid): getAddresLabelByGuid
    {
        $parameters = new getAddresLabelByGuid();
        $parameters->guid = [$guid];

        return $parameters;
    }
}
