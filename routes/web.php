<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

$this->_auth_middleware = 'auth';

Route::get('loginas/{id}', function ($id) {
    Auth::login(\App\User::find($id));
});

include 'endpoints.php';
