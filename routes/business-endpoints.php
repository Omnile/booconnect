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

    Route::get('add-product', function () {
        return view('restaurant.add-product');
    });
    Route::get('products', function () {
        return view('restaurant.products');
    });
    Route::get('order-history', function () {
        return view('restaurant.order-history');
    });
    Route::get('pending-order', function () {
        return view('restaurant.pending-order');
    });

    Route::resource('signup', 'SignupController');

    Route::group(['middleware' => ['business', 'auth']], function () {

        Route::resource('dashboard', 'DashboardController');

        Route::resource('order', 'OrderController');

        Route::resource('item', 'ItemController');

        Route::resource('account', 'AccountController');
    });
});
