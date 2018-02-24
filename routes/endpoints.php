<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are shared between the web and API routes.
|
 */

Route::resource('/', 'RootController');

Route::resource('items', 'ItemController');

Route::resource('cart', 'CartController');

Route::resource('checkout', 'CheckoutController');

Route::resource('wishlist', 'WishlistController');

Route::resource('resturants', 'ResturantController');

Route::group(['prefix' => 'resturants'], function () {

    Route::resource('items', 'ItemController');
});
