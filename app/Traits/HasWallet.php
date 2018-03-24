<?php

namespace App\Traits;

use App\Wallet;

/**
 * This creates a relationship between
 * a wallet instance and its owner
 */
trait HasWallet
{

    public function wallet()
    {
        return new Wallet($this);
    }
}
