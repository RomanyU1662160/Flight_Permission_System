<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReviewSection extends Component
{


    public function submit()
    {
        $aircraft = session('aircraft');
        $leg1 = session('leg1');
        $airline = session('airline');

        if (session('leg2')) {
            $leg2 = session('leg2');
            $leg2->save();
        }
    }
    public function render()
    {
        return view('livewire.requests.review-section');
    }
}
