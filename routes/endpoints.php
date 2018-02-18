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

Route::resource('pictures', 'PictureController');

Route::group(['prefix' => 'resturants'], function () {

    Route::resource('/', 'ResturantController');

    Route::resource('items', 'ItemController');
});
