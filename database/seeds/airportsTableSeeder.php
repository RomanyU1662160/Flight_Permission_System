<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class airportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([
            [
                'country_id' => 1,
                'name' => "Cairo International",
                'icao' => 'HECA',
                'iata' => "CAI",
                'info' => "information to be Cairo airport, coming soon ",
                'latitude' => "30.1219006",
                "longitude" => '31.4055996',
                'timezone' => 'Africa/Cairo (GMT +2:00)',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'country_id' => 53,
                'name' => "Manchester Airport",
                'icao' => 'EGM',
                'iata' => "MAN",
                'info' => "information to be Cairo airport, coming soon ",
                'latitude' => "53.3536987",
                "longitude" => '-2.27495',
                'timezone' => 'Europe/London (GMT +0:00)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country_id' => 53,
                'name' => "London Gatwick Airport",
                'icao' => 'LGW',
                'iata' => "EGKK",
                'info' => "information to be Cairo airport, coming soon ",
                'latitude' => "51.1481018",
                "longitude" => '-0.190278',
                'timezone' => 'Europe/London (GMT +0:00)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country_id' => 53,
                'name' => "Leeds Bradford Airport ",
                'icao' => 'EGNM',
                'iata' => "LBA",
                'info' => "information to be Cairo airport, coming soon ",
                'latitude' => "53.8658981",
                "longitude" => '-1.66057',
                'timezone' => 'Europe/London (GMT +0:00)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country_id' => 53,
                'name' => "Abu Dhabi International Airport ",
                'icao' => 'OMAA',
                'iata' => "AUH",
                'info' => "information to be Cairo airport, coming soon ",
                'latitude' => "53.8658981",
                "longitude" => '-1.66057',
                'timezone' => 'Europe/London (GMT +0:00)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
