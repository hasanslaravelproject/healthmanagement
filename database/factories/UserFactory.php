<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'phone_number' => $faker->phoneNumber(),
        'profile_photo' => $faker->imageUrl($width, $height,'man'),
        'password' => '$2y$10$NXL8zVVYJ2MkgD0.vo8qmeRa4OIy2b5Q2mj2KdIE43osqzc8vjkfy',
        'remember_token' => Str::random(10),
    ];
});
