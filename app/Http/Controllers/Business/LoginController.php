<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Auth\LoginController as Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('business.auth.login');
    }

    /**
     * Once the user has been authenticated, check
     * that this user infact has a restaurant.
     * If this user does not have a one,
     * log out the user flash errors
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->has('restaurant')) {
            return;
        }

        return $this->logout();
    }
}
