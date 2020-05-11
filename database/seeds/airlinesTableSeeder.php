<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class airlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airlines')->insert([
            [
                'country_id' => 1,
                'agent_id' => 2,
                'name' => "EasyJet",
                'icao' => 'EZY',
                'iata' => "EZ",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'country_id' => 2,
                'name' => "Egypt Air",
                'agent_id' => null,
                'icao' => 'MSR',
                'iata' => "MS",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country_id' => 1,
                'name' => "British airways",
                'agent_id' => null,
                'icao' => 'BAW',
                'iata' => "BW",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country_id' => 5,
                'name' => "Turkish airways",
                'agent_id' => null,
                'icao' => 'THY',
                'iata' => "TH",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country_id' => 4,
                'name' => "Air France",
                'agent_id' => null,
                'icao' => 'AFR',
                'iata' => "AF",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country_id' => 6,
                'name' => "Aegean Air",
                'agent_id' => null,
                'icao' => 'AEE',
                'iata' => "A3",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
