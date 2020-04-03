<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AircraftSection extends Component
{
    public  $leg1;
    public  $leg2;
    public  $airline;

    public function mount()
    {
        $this->flight = session('flight');
        $this->leg1 = session('leg1');
        $this->leg2 = session('leg2');
    }






    public function render()
    {
        return view('livewire.requests.aircraft-section');
    }
}
