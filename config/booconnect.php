<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | Booconnect Default display currency
    |
     */

    'currency' => 'GHC',

    /*
    |--------------------------------------------------------------------------
    | Seeder Settings
    |--------------------------------------------------------------------------
    |
    | Maximum number of items to seed for each collection on the database.
    |
     */

    'seed' => [
        'max' => env('BOOCONNECT_SEED_MAX_ITEMS', 100),
    ],

];
