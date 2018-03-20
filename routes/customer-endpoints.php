<?php

/*
|--------------------------------------------------------------------------
| Customer Endpoints
|--------------------------------------------------------------------------
|
| These are routes for working with the customer App
|
 */

Route::group(['domain' => '{domain}', 'middleware' => ['clean-params']], function () {

    Auth::routes();

    Route::resource('/', 'RootController');

    Route::resource('search', 'SearchController');

    Route::resource('items', 'ItemController');

    Route::resource('ratings', 'RatingController');

    Route::resource('cart', 'CartController');

    Route::resource('restaurants', 'RestaurantController');

    Route::group(['middleware' => 'auth'], function () {

        Route::resource('verify', 'VerifyController');

        Route::resource('checkout', 'CheckoutController');
    });

/**
 * So basically here, we use the verified middleware.
 * Only routes specified here requires verification.
 */
    Route::group(['middleware' => ['auth', 'verified']], function () {

        Route::resource('account', 'AccountController');

        Route::resource('orders', 'OrderController');

        Route::resource('wishlist', 'WishlistController');
    });
});
