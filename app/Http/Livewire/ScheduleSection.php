<?php

namespace App\Http\Livewire;

use App\Models\Purpose;
use Livewire\Component;
use Illuminate\Support\Arr;

class ScheduleSection extends Component
{

    public $selected;


    protected $listeners = [
        'purposeSelected' => 'handlePurposeSele cted'
    ];

    public function handlePurposeSelected()
    {
        $selectedPurpose = Purpose::find($this->selected);
        session(['purpose' => $selectedPurpose]);
    }

    public function render()
    {
        return view('livewire.requests.schedule-section', [
            'purposes' => Purpose::all()
        ]);
    }
}
