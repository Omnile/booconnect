<?php

/*
|--------------------------------------------------------------------------
| Business Endpoints
|--------------------------------------------------------------------------
|
| These are routes for working with the business App
|
 */

Route::group(['domain' => '{subdomain}.' . config('booconnect.domain'), 'namespace' => 'Business'], function () {

    Auth::login(App\User::find(1));
    Route::view('', 'business.dashboard');

    Route::get('login', 'LoginController@showLoginForm')->name('login');

    Route::get('register', 'RegisterController@showRegistrationForm');

    /**
     * To access this routes, the user must:
     *
     * 1. Be logged in,
     * 2. Be a business account,
     * 3. Be verified
     *
     * The middlewares protecting these
     * routes are sorted accordingly.
     */
    Route::group(['middleware' => ['clean-subdomain']], function () {

        Auth::login(\App\User::find(1));

        Route::resource('items', 'ItemController');

        Route::resource('account', 'AccountController');

        Route::resource('dashboard', 'DashboardController');

        Route::resource('pending-orders', 'PendingOrderController');

        Route::resource('completed-orders', 'CompletedOrderController');
    });
});
