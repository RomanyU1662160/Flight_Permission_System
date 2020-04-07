<?php

namespace App\Http\Livewire;

use App\Models\Purpose;
use Livewire\Component;

class PurposeSection extends Component
{
    public $selected;


    protected $listeners = [
        'purposeSelected' => 'handlePurposeSelected'
    ];

    public function handlePurposeSelected()
    {
        $selectedPurpose = Purpose::find($this->selected);
        session(['purpose' => $selectedPurpose]);
    }

    public function render()
    {
        return view('livewire.requests.purpose-section', [
            'purposes' => Purpose::all()
        ]);
    }
}
