<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Amendment;
use Faker\Generator as Faker;

$factory->define(Amendment::class, function (Faker $faker) {
    return [
        'permission_id' => $faker->numberBetween(1, 20),
        'requester_id' => $faker->numberBetween(4, 6),
        'approver_id' => $faker->numberBetween(1, 3),
        'state_id' => $faker->numberBetween(1, 3),
        'ref' => 'CAA-' . $faker->numberBetween(1, 5000),
        'info' => "Info about the permission" . $faker->text(100),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now', $timezone = null),
    ];
});
