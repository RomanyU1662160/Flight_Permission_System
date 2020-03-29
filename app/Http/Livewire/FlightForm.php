<?php

namespace App\Http\Livewire;

use App\Models\Airline;
use Livewire\Component;

$newAirline =  new Airline([
    'name' => 'Egypt Air ',
    'icao' => 'MSR ',
    'iata' => 'MS',

]);

class FlightForm extends Component
{

    public $callsign = "MSR ";

    public function render()
    {
        return view('livewire.flights.flight-form');
    }
}
