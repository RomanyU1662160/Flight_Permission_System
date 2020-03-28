<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class aircraftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('aircrafts')->insert([
            ['country_id' => 2,
                'flight_id' => 5,
                'reg' => "SU-" . strtoupper(strtoupper(Str::random(3))),
                'type' => "A320",
                'capacity' => '180',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['country_id' => random_int(1, 100),
                'flight_id' => 1,
                'reg' => "EZ-" . strtoupper(Str::random(3)),
                'type' => "B737",
                'capacity' => 280,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['country_id' => random_int(1, 100),
                'flight_id' => 1,
                'reg' => "EG-" . strtoupper(Str::random(3)),
                'type' => "B747",
                'capacity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['country_id' => random_int(1, 100),
                'flight_id' => 1,
                'reg' => "SU-" . strtoupper(strtoupper(Str::random(3))),
                'type' => "A320",
                'capacity' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
