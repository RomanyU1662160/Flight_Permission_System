<?php

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Country::class, 100)->create();
        DB::table('countries')->insert([
            [
                'name' => "United Kingdom",
                'prefix' => "G",
                "info" => "About info  will be    added later",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Egypt",
                'prefix' => "SU",
                "info" => "About info  will be    added later",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Germany",
                'prefix' => "D",
                "info" => "About info  will be    added later",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "France",
                'prefix' => "F",
                "info" => "About info  will be    added later",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Turkey",
                'prefix' => "TC",
                "info" => "About info  will be    added later",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Greece",
                'prefix' => "SX",
                "info" => "About info  will be    added later", 'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
