<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace spec\BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory;

use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\AddressFactory;
use BitBag\SyliusPocztaPolskaShippingExportPlugin\Factory\AddressFactoryInterface;
use PhpSpec\ObjectBehavior;
use PocztaPolska\adresType;
use Sylius\Component\Core\Model\AddressInterface;
use Sylius\Component\Core\Model\OrderInterface;

class AddressFactorySpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(AddressFactory::class);
        $this->shouldImplement(AddressFactoryInterface::class);
    }

    function it_creates_address_type(
        OrderInterface $order,
        AddressInterface $shippingAddress
    ): void {
        $order->getShippingAddress()->willReturn($shippingAddress);

        $shippingAddress->getCompany()->willReturn('Company');
        $shippingAddress->getFullName()->willReturn('Mike Ross');
        $shippingAddress->getStreet()->willReturn('350 5th Ave');
        $shippingAddress->getCity()->willReturn('New York');
        $shippingAddress->getPostcode()->willReturn('10118');

        $this->createNew($order)
            ->shouldBeLike($this->getExpectedResult());
    }

    private function getExpectedResult(): adresType
    {
        $address = new adresType();
        $address->nazwa = 'Company Mike Ross';
        $address->ulica = '350 5th Ave';
        $address->miejscowosc = 'New York';
        $address->kodPocztowy = '10118';

        return $address;
    }
}
