<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Verify\SendCode;
use App\Http\Requests\Verify\VerifyCode;
use Illuminate\Http\Request;

/**
 * @resource Verify Business User
 *
 * phone verification endpoints
 */
class VerifyController extends Controller
{
    /**
     * Get Status
     *
     * Get verification status on authenticated account
     *
     * @return \Illuminate\Http\Response
     *
     * NOTE: This will display the verification form
     * if accessed from a web browser
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            return ['verification_status' => anyAuth()->user()->phone_verified];
        }

        return view('business.auth.verify');
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }

    /**
     * Verify OTP Code
     *
     * Verify the OTP code that was sent to the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VerifyCode $request)
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
     * Send Verification Code
     *
     * A temporary verification code will be sent to the user.
     * This code will expire after 5 minuites.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SendCode $request, $id)
    {
        $user = anyAuth()->user();

        $user->restaurant->phone = $request->input('phone');

        $user->restaurant->sendOTP();

        $user->save();

        if ($request->wantsJson()) {
            return ['message' => 'verification code sent to ' . $user->restaurant->phone];
        }

        return redirect('verify');
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($id)
    {
        //
    }
}
