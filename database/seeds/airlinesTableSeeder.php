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
            ['country_id' => 1,
                'agent_id' => 2,
                'name' => "EasyJet",
                'icao' => 'EZY',
                'iata' => "EZ",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            ['country_id' => 2,
                'name' => "Egypt Air",
                'agent_id' => null,
                'icao' => 'MSR',
                'iata' => "MS",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['country_id' => 4,
                'name' => "British airways",
                'agent_id' => null,
                'icao' => 'BAW',
                'iata' => "BW",
                'info' => "information to be added",
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
