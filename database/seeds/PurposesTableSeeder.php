<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurposesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purposes')->insert([
            [
                'name' => 'passenger',
                'info' => 'Info about pax permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'over flying',
                'info' => 'Info about over flying permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'cargo',
                'info' => 'Info about  cargo  permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'cargo',
                'info' => 'Info about  cargo  permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'charter',
                'info' => 'Info about  charter   permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'business',
                'info' => 'Info about  business   permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'technical landing',
                'info' => 'Info about  technical   permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'refueling',
                'info' => 'Info about  refueling   permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'private',
                'info' => 'Info about  private   permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
