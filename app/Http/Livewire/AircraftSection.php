<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AircraftSection extends Component
{

    public  $airline;
    public $reg;

    public function mount()
    {
        $this->airline = session('airline');
    }






    public function render()
    {
        return view('livewire.requests.aircraft-section');
    }
}
