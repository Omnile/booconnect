<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are shared between the web and API routes.
|
 */

Route::get('/home', 'RootController@index');

Route::resource('/', 'RootController');

Route::resource('items', 'ItemController');

Route::resource('cart', 'CartController');

Route::resource('resturants', 'ResturantController');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('verify', 'VerifyController');

    Route::resource('account', 'AccountController');

    Route::resource('orders', 'OrderController');
});

Route::group(['middleware' => 'verified'], function () {

    Route::resource('checkout', 'CheckoutController');

    Route::resource('wishlist', 'WishlistController');
});

Route::get('logout', function () {

    auth()->logout();

    return back();
});
