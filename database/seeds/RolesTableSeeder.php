<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            [
                'name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CAA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'agent',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'airliner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CaaManager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
