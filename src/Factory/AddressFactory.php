<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
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
