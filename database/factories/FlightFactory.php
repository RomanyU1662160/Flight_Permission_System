<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Flight;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'airline_id' => $faker->numberBetween(1, 4),
        'permission_id' => $faker->numberBetween(1, 20),
        'aircraft_id' => $faker->numberBetween(1, 10),
        'origin_id' => $faker->numberBetween(1, 20),
        'destination_id' => $faker->numberBetween(1, 20),
        'nbr' => $faker->numberBetween(1, 500),
        'callsign' => $faker->text(5),
        'dof' => $faker->date($format = 'Y-m-d', $min = 'now', $max = Carbon::now()->addMonth($faker->numberBetween(1, 4))),
        'etd' => $faker->time($format = 'H:i', $min = 'now'),
        'eta' => $faker->time($format = 'H:i', $min = 'now'),
        'info' => $faker->text(100),
        'created_at' => Carbon::now()->addMonths($faker->numberBetween(-10, -30)),
        'updated_at' => Carbon::now()->addDays($faker->numberBetween(-1, -10)),

    ];
});
