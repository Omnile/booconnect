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

    Route::view('/', 'business.dashboard');

    Route::get('login', 'LoginController@showLoginForm');

    Route::get('register', 'RegisterController@showRegistrationForm');

    // Route::group(['middleware' => ['auth', 'business', 'verify']], function () {

    Route::resource('dashboard', 'DashboardController');

    Route::resource('pending-orders', 'PendingOrderController');

    Route::resource('completed-orders', 'CompletedOrderController');

    Route::resource('items', 'ItemController');

    Route::resource('account', 'AccountController');
    // });
});
