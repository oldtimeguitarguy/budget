<?php

namespace App\Models\Account\Base\Traits;

use App\Pinch\Money;

trait AttributeMutators
{
    /**
     * Get the balance as money
     *
     * @param  integer $balance
     * @return \App\Pinch\Money
     */
    public function getBalanceAttribute($balance)
    {
        return new Money($balance);
    }

    /**
     * Get the value of the balance if it's Money
     *
     * @param mixed $balance
     */
    public function setBalanceAttribute($balance)
    {
        $this->attributes['balance'] = $balance instanceof Money
            ? $balance->value()
            : $balance;
    }
    
    /**
     * Get the normal balance as money
     *
     * @param  integer $normalBalance
     * @return \App\Pinch\Money
     */
    public function getNormalBalanceAttribute($normalBalance)
    {
        return new Money($normalBalance);
    }

    /**
     * Get the value of the normal balance if it's Money
     *
     * @param mixed $normalBalance
     */
    public function setNormalBalanceAttribute($normalBalance)
    {
        $this->attributes['normal_balance'] = $normalBalance instanceof Money
            ? $normalBalance->value()
            : $normalBalance;
    }

    /**
     * Get the negative balance as money
     *
     * @param  integer $negativeBalance
     * @return \App\Pinch\Money
     */
    public function getNegativeBalanceAttribute($negativeBalance)
    {
        return new Money($negativeBalance);
    }

    /**
     * Get the value of the negative balance if it's Money
     *
     * @param mixed $negativeBalance
     */
    public function setNegativeBalanceAttribute($negativeBalance)
    {
        $this->attributes['negative_balance'] = $negativeBalance instanceof Money
            ? $negativeBalance->value()
            : $negativeBalance;
    }
}
