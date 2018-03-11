<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::group(array('prefix' => 'b/v1', 'middleware' => []), function () {
    include 'business-endpoints.php';
});

Route::group(array('prefix' => 'v1', 'middleware' => []), function () {
    include 'customer-endpoints.php';
});
