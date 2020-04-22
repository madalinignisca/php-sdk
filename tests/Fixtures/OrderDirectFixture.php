<?php declare(strict_types=1);
/**
 * Copyright © 2020 MultiSafepay, Inc. All rights reserved.
 * See DISCLAIMER.md for disclaimer details.
 */

namespace MultiSafepay\Tests\Fixtures;

use Money\Money;
use MultiSafepay\Api\Transactions\RequestOrder\Description;
use MultiSafepay\Api\Transactions\RequestOrder\GatewayInfo;
use MultiSafepay\Api\Transactions\RequestOrderDirect;

/**
 * Trait OrderDirectFixture
 * @package MultiSafepay\Tests\Fixtures
 */
trait OrderDirectFixture
{
    /**
     * @return RequestOrderDirect
     */
    public function createOrderDirectRequestFixture(): RequestOrderDirect
    {
        return new RequestOrderDirect(
            (string)time(),
            Money::EUR(20),
            'ideal',
            $this->createPaymentOptionsFixture(),
            new GatewayInfo('0031'),
            new Description('Foobar')
        );
    }
}
