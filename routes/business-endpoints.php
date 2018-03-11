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
        return view('business.dashboard');
    });

    // Route::get('add-product', function () {
    //     return view('business.add-product');
    // });
    // Route::get('products', function () {
    //     return view('business.products');
    // });
    // Route::get('order-history', function () {
    //     return view('business.order-history');
    // });
    // Route::get('pending-order', function () {
    //     return view('business.pending-order');
    // });

    Route::get('login', 'LoginController@showLoginForm');

    Route::get('register', 'RegisterController@showRegistrationForm');

    Route::resource('order', 'PendingOrderController', ['prefix' => 'pending']);

    Route::group(['middleware' => ['auth', 'business', 'verify']], function () {

        Route::resource('dashboard', 'DashboardController');

        Route::resource('order', 'CompletedOrderController', ['prefix' => 'completed']);

        Route::resource('item', 'ItemController');

        Route::resource('account', 'AccountController');
    });
});
