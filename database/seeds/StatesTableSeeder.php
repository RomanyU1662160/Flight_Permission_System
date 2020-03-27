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

            ],
            [
                'name' => 'submitted',

            ],
            [
                'name' => 'pending',

            ],
            [
                'name' => 'rejected',

            ],
        ]);

    }
}
