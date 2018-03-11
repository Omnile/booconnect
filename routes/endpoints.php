<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are shared between the web and API routes.
|
 */

include 'business-endpoints.php';

include 'customer-endpoints.php';

Route::get('logout', function () {

    auth()->logout();

    return back();
});
