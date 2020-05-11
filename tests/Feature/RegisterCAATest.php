<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterCAATest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCAARegister()
    {
        $response = $this->get('/admin/admin/newCAA');
        $response->assertStatus(302);
    }
}
