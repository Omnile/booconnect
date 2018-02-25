<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @resource Account
 *
 * Account Endpoints
 */
class AccountController extends Controller
{
    /**
     * Get Account.
     *
     * Get the data of the authenticated user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $account = auth()->user();

        if ($request->wantsJson()) {
            return $account;
        }

        return view('account', compact('account'));
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }

    /**
     * Update Account
     *
     * Update account information
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function show($id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return $this->store($request);
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($id)
    {
        //
    }
}
