<?php

namespace App\Http\Livewire;

use App\Models\Flight;
use Livewire\Component;
use Livewire\WithPagination;

class FlightsList extends Component
{

    use WithPagination;

    // public   $flights;

    // public function mount($flights)
    // {
    //     return $this->flights = $flights;
    // }


    public function render()
    {
        return view('livewire.flights.flights-list', [
            'flights' => Flight::latest()->paginate(4)
        ]);
    }
}
