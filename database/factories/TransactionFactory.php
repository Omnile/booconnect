<?php

use App\Restaurant;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Transaction::class, function (Faker $faker) {
    return [
        'type' => array_random(['credit', 'debit']),
        'value' => rand(1.00, 100.00),
        'description' => $faker->sentence(),
        'channel' => array_random(['mtn-gh', 'bank']),

        'data' => $faker->sentence(),
        'owner_type' => array_random([
            Restaurant::class,
            User::class,
        ]),
        'owner_id' => rand(1, config('booconnect.seed.max')),
    ];
});
