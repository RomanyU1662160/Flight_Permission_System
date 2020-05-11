<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Flight;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FlightSessionTest extends TestCase
{
    public function testFlightSessionIsExist()
    {
        $flight = new flight();
        $response = $this->withSession(['flight' => $flight])
            ->get('/new/step2');
    }
}
