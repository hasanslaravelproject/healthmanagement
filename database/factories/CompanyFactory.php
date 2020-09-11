<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'type' => $faker->randomLetter(),
        'branch_code' => $faker->word(),
        'address' => $faker->email(),
        'contact_number' => $faker->phoneNumber(),
        'email' => $faker->email(),
        'status' => 1,
       /*  'category_id' => App\Category::all()->random()->id, */
       /*  'user_id' => App\User::all()->random()->id, */
        //'featured_image' => $faker->imageUrl($width, $height,'office')
    ];
});
