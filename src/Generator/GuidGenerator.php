<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Generator;

class GuidGenerator implements GuidGeneratorInterface
{
    public function generate(): string
    {
        mt_srand((int) microtime() * 10000);
        $charId = strtoupper(md5(uniqid((string) rand(), true)));

        return substr($charId, 0, 32);
    }
}
