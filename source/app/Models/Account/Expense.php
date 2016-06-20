<?php

namespace App\Models\Account;

use App\Models\Account\Abstracts\DebitAccount;
use App\Models\Account\Contracts\IncomeStatementAccount;

/**
 * An expense is an item of economic value that is expected to
 * be consumed within the current period.
 */
class Expense extends DebitAccount implements IncomeStatementAccount
{
    /**
     * Create a new Expense instance
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        $attributes['type'] = 'expense';
        parent::__construct($attributes);
    }
}