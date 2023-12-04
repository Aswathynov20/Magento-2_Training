<?php

namespace PayPal\Braintree\Block\Adminhtml\Virtual;

use PayPal\Braintree\Block\Payment;

/**
 * @api
 * @since 100.0.2
 */
class Script extends Payment
{
    /**
     * @return string
     */
    public function getMethodCode(): string
    {
        return 'braintree';
    }

    /**
     * @return bool
     */
    public function isVaultEnabled(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function hasVerification(): bool
    {
        return true;
    }
}
