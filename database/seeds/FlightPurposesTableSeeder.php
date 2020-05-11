<?php

use App\Models\Flight;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightPurposesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $flights = Flight::all();
        foreach ($flights as $flight) {
            DB::table('flights_purposes')->insert([
                'flight_id' => $flight->id,
                'purpose_id' => $faker->numberBetween(1, 9),
            ]);
        }
    }
}
