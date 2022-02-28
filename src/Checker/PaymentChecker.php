<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusPocztaPolskaShippingExportPlugin\Checker;

use BitBag\SyliusShippingExportPlugin\Entity\ShippingGatewayInterface;
use Sylius\Component\Core\Model\OrderInterface;

class PaymentChecker implements PaymentCheckerInterface
{
    public function isCashOnDelivery(OrderInterface $order, ShippingGatewayInterface $shippingGateway): bool
    {
        $codPaymentMethodCode = $shippingGateway->getConfigValue('cod_payment_method_code');
        $payments = $order->getPayments();

        foreach ($payments as $payment) {
            return $payment->getMethod()->getCode() === $codPaymentMethodCode;
        }

        return false;
    }
}
