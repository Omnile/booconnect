<?php

/*
|--------------------------------------------------------------------------
| Business Endpoints
|--------------------------------------------------------------------------
|
| These are routes for working with the business App
|
 */

Route::group(['namespace' => 'Business', 'as' => 'business.'] + config('booconnect.subdomain'), function () {
    Route::view('verify', 'business.auth.verify');
    Route::view('cashout', 'business.cashout');

    Route::get('login', 'LoginController@showLoginForm');

    Route::get('register', 'RegisterController@showRegistrationForm');

    Route::post('register', 'RegisterController@register');

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
    Route::group(['middleware' => ['clean-params', $this->_auth_middleware]], function () {
        Route::view('transactions', 'business.transactions.index');

        Route::view('', 'business.dashboard');

        Route::resource('items', 'ItemController');

        Route::resource('account', 'AccountController');

        Route::resource('settings', 'SettingsController');

        Route::resource('dashboard', 'DashboardController');

        Route::resource('transactions', 'TransactionController');

        Route::resource('pending-orders', 'PendingOrderController');

        Route::resource('completed-orders', 'CompletedOrderController');

        Route::group(['middleware' => [], 'prefix' => 'wallet'], function () {

            Route::get('balance', 'WalletController@balance');

            Route::post('cashout', 'WalletController@cashout');

        });
    });
});
