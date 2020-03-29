<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FlightBlock extends Component
{
    public $flight;


    public function mount($flight)
    {
        return $this->flight = $flight;
    }

    public function render()
    {
        return view('livewire.flights.flight-block');
    }
}
