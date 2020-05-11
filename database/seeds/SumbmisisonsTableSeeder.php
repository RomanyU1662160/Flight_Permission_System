<?php

use App\Models\Submission;
use Illuminate\Database\Seeder;

class SumbmisisonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Submission::class, 3)->create();
    }
}
