<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            StatesTableSeeder::class,
            PurposesTableSeeder::class,
            PermissionsTableSeeder::class,
            PurposesTableSeeder::class,
            FlightsTableSeeder::class,
            CountriesTableSeeder::class,
            AmendmentsTableSeeder::class,
            aircraftsTableSeeder::class,
            agentsTableSeeder::class,
            airlinesTableSeeder::class,
            airportsTableSeeder::class,
            FlightPurposesTableSeeder::class,
            SumbmisisonsTableSeeder::class,
            UserRolesTableSeeder::class
        ]);
    }
}
