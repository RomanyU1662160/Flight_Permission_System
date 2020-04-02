<?php

namespace App\Http\Livewire;

use session;
use App\Models\Flight;
use App\Models\Airport;
use App\Models\Purpose;
use Livewire\Component;

class FlightSection extends Component
{
    public $airline;
    public $nbr;
    public $callsign;
    public $hasReturn = false;


    // L1 Variables
    public $l1_origin_name;
    public $l1_origin_icao;
    public $l1_origin_iata;
    public $l1_origin_dof;
    public $l1_origin_etd;

    public $l1_destination_name;
    public $l1_destination_icao;
    public $l1_destination_iata;
    public $l1_destination_dof;
    public $l1_destination_etd;

    // L2 Variables
    public $l2_origin_name;
    public $l2_origin_icao;
    public $l2_origin_iata;
    public $l2_origin_dof;
    public $l2_origin_etd;

    public $l2_destination_name;
    public $l2_destination_icao;
    public $l2_destination_iata;
    public $l2_destination_dof;
    public $l2_destination_etd;


    public function updated($field)
    {
        $this->validateOnly($field, [
            "l1_origin_name" => "required",
            "l1_origin_icao" => "required",
            "l1_origin_iata" => "required",
            "l1_origin_dof" => "required",
            "l1_origin_etd" => "required",

            "l1_destination_name" => "required",
            "l1_destination_icao" => "required",
            "l1_destination_iata" => "required",
            "l1_destination_dof" => "required",
            "l1_destination_etd" => "required",

            "l2_origin_name" => "required",
            "l2_origin_icao" => "required",
            "l2_origin_iata" => "required",
            "l2_origin_dof" => "required",
            "l2_origin_etd" => "required",

            "l2_destination_name" => "required",
            "l2_destination_icao" => "required",
            "l2_destination_iata" => "required",
            "l2_destination_dof" => "required",
            "l2_destination_etd" => "required",
        ], ['This filed is required']);
    }



    public function toggleHasReturn()
    {
        // dd($this->hasReturn);
        $this->hasReturn = !$this->hasReturn;
    }

    public function setCallsign()
    {

        return $this->callsign = $this->airline->icao . $this->nbr;
    }

    public function mount()
    {
        $this->airline = session('airline');
    }

    public function setOriginIcaoIataValues()
    {
        $airport = Airport::find($this->l1_origin_name);
        $this->l1_origin_icao = $airport->icao;
        $this->l1_origin_iata = $airport->iata;
    }

    public function setOriginNameIataValues()
    {
        $airport = Airport::where('icao', $this->l1_origin_icao)->first();
        if ($airport) {
            $this->l1_origin_name = $airport->id;
            $this->l1_origin_iata = $airport->iata;
        } else {
            $this->l1_origin_name = null;
            $this->l1_origin_iata = null;
        }
    }

    public function setOriginNameIcaoValues()
    {
        $airport = Airport::where('iata', $this->l1_origin_iata)->first();
        if ($airport) {
            $this->l1_origin_name = $airport->id;
            $this->l1_origin_icao = $airport->icao;
        } else {
            $this->l1_origin_name = null;
            $this->l1_origin_icao = null;
        }
    }

    public function setDestinationIcaoIataValues()
    {
        $airport = Airport::find($this->l1_destination_name);

        if ($airport) {
            $this->l1_destination_icao = $airport->icao;
            $this->l1_destination_iata = $airport->iata;
        } else {
            $this->l1_destination_icao = null;
            $this->l1_destination_iata = null;
        }
    }



    public function setDestinationNameIataValues()
    {
        $airport = Airport::where('icao', $this->l1_destination_icao)->first();
        if ($airport) {
            $this->l1_destination_name = $airport->id;
            $this->l1_destination_iata = $airport->iata;
        } else {
            $this->l1_destination_name = null;
            $this->l1_destination_iata = null;
        }
    }

    public function setDestinationNameIcaoValues()
    {
        $airport = Airport::where('iata', $this->l1_destination_iata)->first();
        if ($airport) {
            $this->l1_destination_name = $airport->id;
            $this->l1_destination_icao = $airport->icao;
        } else {
            $this->l1_destination_name = null;
            $this->l1_destination_icao = null;
        }
    }









    public function submit()
    {
        $leg1 = new Flight([
            'airline_id' => $this->airline->id,
            'origin_id' => $this->origin,
            'destination_id' => $this->destination,
            'nbr' => $this->nbr,
            'callsign' => $this->callsign,
            'dof' => $this->origin_dof,

        ]);
        $leg2 = new Flight([
            'airline_id' => $this->airline->id,
            'origin_id' => $this->origin,
            'destination_id' => $this->destination,
            'nbr' => $this->nbr,
            'callsign' => $this->callsign,
            'dof' => $this->origin_dof,

        ]);
    }




    public function render()
    {
        return view('livewire.requests.flight-section', [
            'airports' => Airport::all(),
        ]);
    }
}
