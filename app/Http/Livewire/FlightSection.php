<?php

namespace App\Http\Livewire;

use App\Models\Airport;
use App\Models\Purpose;
use Livewire\Component;

class FlightSection extends Component
{

    public $airline;
    public $hasReturn = false;


    public function toggleHasReturn()
    {
        // dd($this->hasReturn);
        $this->hasReturn = !$this->hasReturn;
    }

    public function mount($airline)
    {
        $this->airline = $airline;
    }
    public function render()
    {
        return view('livewire.requests.flight-section', [
            'airports' => Airport::all(),
        ]);
    }
}
