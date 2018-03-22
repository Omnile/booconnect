<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Domain name Root
    |--------------------------------------------------------------------------
    |
    | Booconnect Default display currency
    |
     */

    'domain' => (string) env('BOOCONNECT_DOMAIN', 'booconnect.run'),

    'subdomain' => (function ($status) {

        if ((boolean) $status) {

            return ['domain' => '{subdomain}.{domain}'];
        }

        return ['domain' => '{domain}'];

    })(env('BOOCONNECT_USE_SUBDOMAIN', false)),

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
        'max' => (int) env('BOOCONNECT_SEED_MAX_ITEMS', 100),
    ],

];
