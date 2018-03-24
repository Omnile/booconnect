<?php

namespace App;

/**
 * The methods in this interface must be implemented
 * by any model that can have a wallet.
 */
interface WalletOwnerInterface
{
    /**
     * A model that can be a wallet owner must
     * have a transactions relationship
     * @return Transaction
     */
    public function transactions();

    /**
     * The wallet owner can also hold a wallet
     * helper methof that will keep it
     * accessible on exisint instance
     * @return Wallet
     */
    public function wallet();
}
