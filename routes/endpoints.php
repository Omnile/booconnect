<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are shared between the web and API routes.
|
 */

Route::resource('items', 'ItemController');

Route::resource('cart', 'CartController');

Route::resource('resturants', 'ResturantController');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('verify', 'VerifyController');
});

/**
 * So basically here, we use the verified middleware.
 * Only routes specified here requires verification.
 */
Route::group(['middleware' => ['auth', 'verified'], function () {

    Route::resource('account', 'AccountController');

    Route::resource('orders', 'OrderController');

    Route::resource('checkout', 'CheckoutController');

    Route::resource('wishlist', 'WishlistController');
}]);

Route::get('logout', function () {

    auth()->logout();

    return back();
});
