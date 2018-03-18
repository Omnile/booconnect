<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        // 'email' => $faker->unique()->safeEmail,
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName(),
        'phone' => $faker->unique()->phoneNumber(),
        'username' => $faker->unique()->username,
        'gender' => array_random(['male', 'female']),
        'restaurant_id' => array_random([null, rand(1, config('booconnect.seed.max'))]),
        'password' => Hash::make(str_random(10)), // secret
        'remember_token' => str_random(10),
        'phone_verified' => rand(0, 1),
        'email_verified' => rand(0, 1),
    ];
});
