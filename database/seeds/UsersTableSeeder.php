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
                'fname' => 'Romany',
                'lname' => 'Sefen',
                'username' => 'romanySefen',
                'email' => 'romany@standup.com',
                'airline_id' => '1',
                'password' => Hash::make('rrrrrr'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fname' => 'Admin',
                'lname' => 'Sefen',
                'username' => 'AdminSefen',
                'email' => 'admin@standup.com',
                'airline_id' => '1',
                'password' => Hash::make('admin11'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'fname' => 'Airliner',
                'lname' => '1',
                'username' => 'Airliner1',
                'email' => 'airliner1@standup.com',
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
                'email' => 'agent1@standup.com',
                'agent_id' => '1',
                'password' => Hash::make('agent11'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
