<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agents')->insert([

            [
                'name' => "National Aviation",
                'Website' => "www.nationalaviation.com",
                "aftn" => "nat",
                "sita" => "nat",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tiger Aviation",
                'Website' => "www.tigeraviation.com",
                "aftn" => "tig",
                "sita" => "tig",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "EAS Aviation",
                'Website' => "www.easaviation.com",
                "aftn" => "eas",
                "sita" => "eas",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "ZAS Aviation",
                'Website' => "www.zasaviation.com",
                "aftn" => "zas",
                "sita" => "zas",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
