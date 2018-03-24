<?php

namespace App;

use App\Exceptions\InvalidBalanceException;
use Illuminate\Support\Facades\DB;
use OVAC\LaravelHubtelPayment\Facades\HubtelPayment;

class Wallet
{

    /**
     * The owner object to interract with
     * @var App\Transaction
     */
    protected $owner;

    /**
     * The amount for a transaction
     * @var number
     */
    protected $amount;

    /**
     * The cashout method (mobile, Bank)
     * @var string
     */
    protected $method;

    /**
     * Description for creating a transaction.
     * @var
     */
    protected $description = 'Account Cashout';

    /**
     * The network channel through wihich
     * the funds will be sent
     * @var string
     */
    protected $channel;

    /**
     * The phone number that will be used
     * in this wallet instance.
     * @var number
     */
    protected $number;

    /**
     * Construct
     *
     * Inject the transaction model.
     */
    public function __construct(WalletOwnerInterface $owner)
    {
        $this->setowner($owner);
    }

    /**
     * Get the balance for the authenticated owner wallet.
     * @return number The balance as an integer.
     */
    public function balance()
    {
        if ($this->owner) {
            return $this->formatBalance($this->sumBalance());
        }

        throw new WalletOwnwerException('A wallet owner instance is required');
    }

    /**
     * Format the balance
     * @param  number $balance The unformatted balance
     * @return Object          a formatted balance object.
     */
    public function formatBalance($balance)
    {
        return collect([
            'balance' => $balance,
            'formatted_balance' => config('booconnect.currency') . ' ' . number_format($balance, 2),
        ]);
    }

    /**
     * Sub the balance using transaction records in the DB
     * @return [type] [description]
     */
    public function sumBalance()
    {
        if (!$this->owner) {
            throw new WalletOwnwerException('A wallet owner instance is required');
        }

        $totalCredit = (int) $this->owner->transactions()->where('type', 'credit')->sum('value');
        $totalDebit = (int) $this->owner->transactions()->where('type', 'debit')->sum('value');

        return (int) $totalCredit - (int) $totalDebit;
    }

    /**
     * Cashout funds from the wallet balance.
     *
     * @param  number $amount        The actual amount that is going to be
     *                               cashed out or an array
     *                               of the config.
     * @return self
     */
    public function cashout($amount)
    {
        return $this->setAmount($amount);
    }

    /**
     * @param  string $description   This is the description for the transaction.
     */
    public function description($description)
    {
        return $this->setDescription($description);
    }

    /**
     * The mobile network channel through which the funds will be sent
     * @param  string $channel this will set the mobile money network
     * @return self
     */
    public function channel($channel)
    {
        return $this->setChannel($channel);
    }

    /**
     * Cashout funds using mobile money.
     *
     * @param  number $amount         The actual amount that is going to be cashed out
     * @param  number $number         The phone number to cashout from
     * @param  string $channel          This will set the mobile money network
     * @param  string $description    This is the description for the transaction.
     *
     * @return
     */
    public function mobileMoney($amount = null, $number = null, $channel = null, $description = null)
    {
        $this->setAmount($amount ?: $this->amount);
        $this->setNumber($number ?: $this->number ?: $this->owner->phone);
        $this->setDescription($description ?: $this->getDescription());

        if ($this->sumBalance() >= $this->getAmount()) {
            // dd($this->owner->name);
            $response =
            HubtelPayment::SendMoney()
                ->to($this->getNumber()) //- The phone number to send the prompt to.
                ->amount($this->getAmount()) //- The exact amount value of the transaction
                ->description($this->getDescription()) //- Description of the transaction.
                ->recepientName('google asap') //- Name of the person making the payment.
                ->customerEmail(config('hubtel.email')) //- Email of the person making the payment.
                ->callback(config('hubtel.callback')) //- The URL to send callback after payment.
                ->channel($this->getChannel()) //- The mobile network Channel.
                ->run(); //- Run the transaction

            $this->debit($this->owner, $this->amount, $this->description, $this->channel, $response);
        }

        throw new InvalidBalanceException(
            'Invalid amount entered. Requires amount less than or equal to balance'
        );
    }

    /**
     * This will create a debit transaction for the wallet holder.
     * @param  WalletOwnerInterface $owner       [description]
     * @param  float                $amount      [description]
     * @param  string               $description [description]
     * @param  [type]               $channel     [description]
     * @param  [type]               $data        [description]
     * @return [type]                            [description]
     */
    public function debit(WalletOwnerInterface $owner, float $amount, string $description, $channel = null, $data = null)
    {
        return $owner->transactions()->create([
            'type' => 'debit',
            'value' => $amount,
            'description' => $description,
            'channel' => $channel,
            'data' => $data,
            'owner_type' => $data,
            'owner_id' => $data,
        ]);
    }

    /**
     * This will create a credit transaction for the wallet holder.
     * @param  WalletOwnerInterface $owner       [description]
     * @param  float                $amount      [description]
     * @param  string               $description [description]
     * @param  [type]               $channel     [description]
     * @param  [type]               $data        [description]
     * @return [type]                            [description]
     */
    public function credit(WalletOwnerInterface $owner, float $amount, string $description, $channel = null, $data = null)
    {
        return $owner->transactions()->create([
            'type' => 'credit',
            'value' => $amount,
            'description' => $description,
            'channel' => $channel,
            'data' => $data,
        ]);
    }

    /**
     * @return App\Transaction
     */
    public function getowner()
    {
        return $this->owner;
    }

    /**
     * @param App\Transaction $owner
     *
     * @return self
     */
    public function setowner(WalletOwnerInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return number
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param number $amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param number $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}
