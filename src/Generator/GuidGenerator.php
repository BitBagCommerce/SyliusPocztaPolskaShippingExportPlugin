<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
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
