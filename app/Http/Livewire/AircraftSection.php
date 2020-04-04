<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AircraftSection extends Component
{
    public  $leg1;

    public  $airline;
    public $reg;

    public function mount()
    {
        $this->airline = session('airline');
        $this->leg1 = session("leg1");
    }






    public function render()
    {
        return view('livewire.requests.aircraft-section');
    }
}
