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

    Route::get('/', function () {
        return view('restaurant.dashboard');
    });

    Route::resource('signup', 'SignupController');

    Route::group(['middleware' => ['business', 'auth']], function () {

        Route::resource('dashboard', 'DashboardController');

        Route::resource('order', 'OrderController');

        Route::resource('item', 'ItemController');

        Route::resource('account', 'AccountController');
    });
});
