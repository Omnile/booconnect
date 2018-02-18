<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/customer', [
            'uses' => 'CustomerController@create'
        ]);

Route::get('/customer/{customer}', [
            'uses' => 'CustomerController@show'
        ]);

//Activation route
Route::post('/customer/activation/{id}', [
            'uses' => 'CustomerController@activate'
        ]);
Route::group(array('prefix' => 'v1', 'middleware' => []), function () {
    include 'endpoints.php';
});
