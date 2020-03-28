<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fname' => 'Admin',
                'lname' => 'Sefen',
                'username' => 'AdminSefen',
                'email' => 'admin@test.com',
                'airline_id' => '1',
                'password' => Hash::make('admin11'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fname' => 'Romany',
                'lname' => 'Sefen',
                'username' => 'romanySefen',
                'email' => 'romany@test.com',
                'airline_id' => '1',
                'password' => Hash::make('rrrrrr'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'fname' => 'CAA',
                'lname' => '1',
                'username' => 'CAAOfficer1',
                'email' => 'caa1@fps.com',
                'airline_id' => '1',
                'password' => Hash::make('cccccc'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fname' => 'CAA',
                'lname' => '2',
                'username' => 'CAAOfficer2',
                'email' => 'caa2@fps.com',
                'airline_id' => '1',
                'password' => Hash::make('cccccc'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'fname' => 'Airliner',
                'lname' => '1',
                'username' => 'Airliner1',
                'email' => 'airliner1@test.com',
                'airline_id' => '2',
                'password' => Hash::make('airliner11'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'fname' => 'Agent',
                'lname' => '1',
                'username' => 'Agent1',
                'email' => 'agent1@test.com',
                'agent_id' => '1',
                'password' => Hash::make('agent11'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}