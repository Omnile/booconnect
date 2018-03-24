<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Transactions\GetTransaction;
use App\Transaction;
use Illuminate\Http\Request;

/**
 * @resource Transactions
 *
 * List or view business transactions
 */
class TransactionController extends Controller
{
    /**
     * Get Transactions
     *
     * Get a paginated list of all the transactions for the
     * authenticated restaurant.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transactions = anyAuth()->user()->transactions()->paginate(20);

        if ($request->wantsJson()) {
            return $transactions;
        }

        return view('transactions', compact('transactions'));
    }

    /**
     * Get single transaction
     *
     * Get the data for a single transaction
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(GetTransaction $transaction)
    {
        if ($request->wantsJson()) {
            return $transaction;
        }

        return view('transaction', compact('transaction'));
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function getbalance(Transaction $transaction)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
