<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are shared between the web and API routes.
|
 */
Route::get('/restaurant', function () {
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

include 'business-endpoints.php';

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

Route::get('logout', function () {

    auth()->logout();

    return back();
});
