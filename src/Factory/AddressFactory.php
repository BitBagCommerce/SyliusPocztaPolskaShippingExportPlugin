<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use PocztaPolska\adresType;
use Sylius\Component\Core\Model\OrderInterface;

class AddressFactory implements AddressFactoryInterface
{
    public function createNew(OrderInterface $order): adresType
    {
        $shippingAddress = $order->getShippingAddress();

        $address = new adresType();
        $address->nazwa = $shippingAddress->getCompany() . ' ' . $shippingAddress->getFullName();
        $address->ulica = $shippingAddress->getStreet();
        $address->miejscowosc = $shippingAddress->getCity();
        $address->kodPocztowy = str_replace('-', '', $shippingAddress->getPostcode());

        return $address;
    }
}
