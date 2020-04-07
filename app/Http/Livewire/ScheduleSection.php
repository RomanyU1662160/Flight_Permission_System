<?php

namespace App\Http\Livewire;

use App\Models\Purpose;
use Livewire\Component;
use Illuminate\Support\Arr;

class ScheduleSection extends Component
{

    public $selected;


    protected $listeners = [
        'purposeSelected' => 'handlePurposeSelected'
    ];

    public function handlePurposeSelected()
    {
        $selectedPurpose = Purpose::find($this->selected);
        session(['purpose' => $selectedPurpose]);
        dd(session('purpose'));
    }

    public function render()
    {
        return view('livewire.requests.schedule-section', [
            'purposes' => Purpose::all()
        ]);
    }
}
