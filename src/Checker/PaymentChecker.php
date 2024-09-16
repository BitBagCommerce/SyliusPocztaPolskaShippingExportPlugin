<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
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
