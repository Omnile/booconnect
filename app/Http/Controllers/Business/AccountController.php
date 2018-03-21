<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\UpdateAccount;
use App\User;
use Illuminate\Http\Request;

/**
 * @resource Account
 * Manage Resturant Admin Account
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
         * Get Account
         * Get the account details of the authenticated user
         *
         * @var App\User
         */
        $account = anyAuth()->user();

        if ($request->wantsJson()) {
            return $account;
        }

        return view('business.account', compact('account'));
    }

    /**
     * Update Account
     * Update the authenticated user account.
     *
     * @param  \Illuminate\Http\UpdateAccount  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateAccount $request)
    {

        if ($request->get('password') == '') {
            $account = anyAuth()->user()->update($request->except('password'));
        } else {
            $account = anyAuth()->user()->update($request->all());
        }

        if ($request->wantsJson()) {
            return $account;
        }

        return back();
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
    public function show(User $user)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy(User $user)
    {
        //
    }
}
