<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'info' => $faker->text(100),
        'created_at' => now(),
        'updated_at' => now(),

    ];
});
