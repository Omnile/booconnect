<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cashout;
use App\Wallet;
use Illuminate\Http\Request;

/**
 * @resource Business Wallet
 * Manage wallet from this resource
 */
class WalletController extends Controller
{
    /**
     * Get Balance
     *
     * Get the balance for the authenticated user's restaurant.
     *
     * @return \Illuminate\Http\Response
     */
    public function balance(Request $request)
    {
        $balance = anyAuth()->user()->restaurant->wallet()->balance();

        if ($request->wantsJson()) {
            return $balance;
        }

        return view('business.wallet', compact('balance'));
    }

    /**
     * Cashout Funds
     *
     * Cashout Funds via mobile money to the phone number
     * associated with the restaurant
     * business account.
     *
     * @response {
     *   "transaction_id": "172",
     *   "balance": 99,
     *   "formatted_balance": "GHC 99.00"
     * }
     *
     * @param App\Http\Requests\Cashout
     *
     * @return \Illuminate\Http\Response
     */
    public function cashout(Cashout $request)
    {
        $response = anyAuth()->user()->restaurant->wallet()

            ->cashout($request->input('amount'))
            ->description($request->input('description'))
            ->channel($request->input('channel'))
            ->{$request->input('method')}();

        if ($request->wantsJson()) {
            return $response;
        }

        flash()->titleAs('Success')->withMessage('Cashout was successful')->createFlash('success');

        return back();
    }

}
