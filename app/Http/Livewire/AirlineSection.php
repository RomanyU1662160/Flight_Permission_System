<?php

namespace App\Http\Livewire;

use App\Models\Airline;
use App\Models\Purpose;
use Livewire\Component;

class AirlineSection extends Component
{


    public $airline = '';
    public $icao = '';
    public $iata = '';
    public $nationality = '';


    protected $listeners = [
        'airlineChanged' => 'setIcaoIataValues',
        'icaoFieldChanged' => 'setAirlineIataField',
        'iataFieldChanged' => 'setAirlineIcaoValues'
    ];

    public function setIcaoIataValues()
    {
        $airline = Airline::find($this->airline);


        if ($airline) {
            $country = $airline->country->name;
            $this->icao = $airline->icao;
            $this->iata = $airline->iata;
            $this->nationality = $country;
        } else {
            $this->icao = null;
            $this->iata = null;
            $this->nationality = null;
        }
    }

    public function setAirlineIataField()
    {
        $airline = Airline::where('icao', $this->icao)->first();

        if ($airline) {
            $country = $airline->country->name;
            $this->iata = $airline->iata;
            $this->airline = $airline->id;
            $this->nationality = $country;
        } else {
            $this->iata = null;
            $this->airline = null;
            $this->nationality = null;
        }
    }


    public function setAirlineIcaoValues()
    {
        $airline = Airline::where('iata', $this->iata)->first();

        if ($airline) {
            $country = $airline->country->name;
            $this->icao = $airline->icao;
            $this->airline = $airline->id;
            $this->nationality = $country;
        } else {
            $this->icao = null;
            $this->airline = null;
            $this->nationality = null;
        }
    }


    //  Live validation
    public function updated($field)
    {
        $this->validateOnly($field, [
            'airline' => 'required',
            'icao' => 'required|min:2|max:4',
            'iata' => 'required|min:1|max:3'
        ]);
    }


    public function render()
    {
        return view('livewire.requests.airline-section', [
            'airlines' => Airline::all(),
            'purposes' => Purpose::all(),
        ]);
    }
}
