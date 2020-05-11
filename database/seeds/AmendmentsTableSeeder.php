<?php

use App\Models\Amendment;
use Illuminate\Database\Seeder;

class AmendmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Amendment::class, 2)->create();
    }
}
