<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = new  User([
            'name' => 'Romany',
            'password' => 'password',
            'email' => 'romany@test.com'
        ]);
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
