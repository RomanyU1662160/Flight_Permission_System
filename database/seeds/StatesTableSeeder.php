<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'name' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'submitted',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'rejected',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);

    }
}
