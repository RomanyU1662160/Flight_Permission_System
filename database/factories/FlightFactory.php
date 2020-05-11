<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Flight;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'airline_id' => $faker->numberBetween(1, 6),
        'permission_id' => $faker->numberBetween(1, 5),
        'aircraft_id' => $faker->numberBetween(1, 5),
        'origin_id' => $faker->numberBetween(1, 5),
        'state_id' => 1,
        'submission_id' => $faker->numberBetween(1, 3),
        'agent_id' => $faker->numberBetween(1, 3),
        'destination_id' => $faker->numberBetween(1, 5),
        'nbr' => $faker->numberBetween(1, 50),
        'callsign' => $faker->text(5),
        'leg_id' => $faker->numberBetween(1, 1),
        'origin_dof' => $faker->date($format = 'Y-m-d', $min = 'now', $max = Carbon::now()->addMonth($faker->numberBetween(1, 4))),
        'destination_dof' => $faker->date($format = 'Y-m-d', $min = 'now', $max = Carbon::now()->addMonth($faker->numberBetween(1, 4))),
        'etd' => $faker->time($format = 'H:i', $min = 'now'),
        'eta' => $faker->time($format = 'H:i', $min = 'now'),
        'info' => $faker->text(10),
        'created_at' => Carbon::now()->addMonths($faker->numberBetween(-1, -10)),
        'updated_at' => Carbon::now()->addDays($faker->numberBetween(-1, -10)),

    ];
});
