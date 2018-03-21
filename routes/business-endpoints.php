<?php

/*
|--------------------------------------------------------------------------
| Business Endpoints
|--------------------------------------------------------------------------
|
| These are routes for working with the business App
|
 */

Route::group(['domain' => '{subdomain}.{domain}', 'namespace' => 'Business'], function () {


    Route::view('profile', 'business.profile');

    Auth::login(App\User::find(1));
    Route::view('', 'business.dashboard');

    Route::get('login', 'LoginController@showLoginForm');

    Route::get('register', 'RegisterController@showRegistrationForm')->name('dashboard');

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

        Route::view('', 'business.dashboard');

        Route::resource('items', 'ItemController');

        Route::resource('account', 'AccountController');

        Route::resource('settings', 'SettingsController');

        Route::resource('dashboard', 'DashboardController');

        Route::resource('pending-orders', 'PendingOrderController');

        Route::resource('completed-orders', 'CompletedOrderController');
    });
});
