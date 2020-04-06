<?php

namespace App\Http\Livewire;

use App\Models\Aircraft;
use App\Models\Country;
use Livewire\Component;

class AircraftSection extends Component
{
    public $countries;
    public  $airline;
    public $reg;
    public $aircrafts = [];
    public $prefix;
    public $selectedCountry;
    public $capacity;
    public $type;

    protected $listeners = ['countrySelected' => 'countrySelected'];

    public function mount($countries)
    {
        $this->countries = $countries;
        $this->airline = session('airline');
    }


    public function countrySelected()
    {
        $country = Country::find($this->selectedCountry);

        $this->aircrafts = $country->aircrafts;

        return $this->prefix = $country->prefix . '-';
    }

    //  Live validation
    public function updated($field)
    {
        $this->validateOnly($field, [
            'prefix' => 'required|max:3',
            'reg' => 'required|max:4',
            'selectedCountry' => 'required',
            'capacity' => 'required|integer',
            'type' => 'required',
        ]);
    }

    public function submit()
    {
        /* $aircraft = new Aircraft([
            'country_id' => $this->selectedCountry,
            'reg' => $this->prefix . $this->reg,
            'type' => $this->type,
            'capacity' => $this->capacity
        ]);*/
        $aircraft = Aircraft::find($this->reg);
        session(['aircraft' => $aircraft]);
        return redirect()->route('requests.new.step4');
    }

    public function render()
    {
        return view('livewire.requests.aircraft-section');
    }
}
