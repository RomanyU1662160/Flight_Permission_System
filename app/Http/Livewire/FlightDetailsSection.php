<?php

namespace App\Http\Livewire;

use App\Models\Purpose;
use Livewire\Component;

class FlightDetailsSection extends Component
{
    public $airline;

    public function mount($airline)
    {
        $this->airline = $airline;
    }


    public function render()
    {
        return view('livewire.requests.flight-details-section', [
            'purposes' => Purpose::all(),
        ]);
    }
}
