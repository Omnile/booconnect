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
    | Use Cloudinary for Image Manipulation and upload
    |--------------------------------------------------------------------------
    |
    | Determine weather to use cloudinary or local image manipulation.
    | 'True' will switch to Cloudinary
    |
     */

    'use-cloudinary' => (bool) env('BOOCONNECT_USE_CLOUDINARY', false),

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
