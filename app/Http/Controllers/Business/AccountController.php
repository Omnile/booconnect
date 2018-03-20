<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\UpdateAccount;
use App\User;
use Illuminate\Http\Request;

/**
 * @resource Account
 * Manage Resturant Account
 */
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /**
         * Get the account of the authenticated user
         * @var App\User
         */
        $account = auth()->user();

        if ($request->wantsJson()) {
            return $account;
        }

        return view('business.account', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UpdateAccount  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateAccount $request)
    {

        if ($request->get('password') == '') {
            $account = auth()->user()->update($request->except('password'));
        } else {
            $account = auth()->user()->update($request->all());
        }

        if ($request->wantsJson()) {
            return $account;
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
