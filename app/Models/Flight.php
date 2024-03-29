<?php

namespace App\Models;

use App\Models\Agent;

use App\Models\State;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Purpose;
use App\Models\Aircraft;
use App\Models\Amendment;
use App\Models\Permission;
use App\Models\Submission;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Flight extends Model
{

    use Searchable;

    protected $fillable = ['airline_id', 'leg_id', 'agent_id', 'origin_id', 'destination_id', 'submission_id', 'state_id', 'permission_id', 'aircraft_id', 'nbr', 'callsign', 'origin_dof', 'destination_dof', 'etd', 'eta', 'info'];

    protected  $dates = ['destination_dof', 'origin_dof', 'etd', 'eta'];

    public function purposes()
    {
        return $this->belongsToMany(Purpose::class);
    }

    public function amendments()
    {
        return $this->hasMany(Amendment::class);
    }


    // get the second leg of the flight
    public function leg()
    {
        return $this->hasOne(Flight::class, 'leg_id', 'id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }


    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }


    public function aircraft()
    {
        return $this->hasOne(Aircraft::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function origin()
    {
        return $this->belongsTo(Airport::class, 'origin_id', 'id');
    }

    public function destination()
    {
        return $this->belongsTo(Airport::class, 'destination_id', 'id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function getRequester()
    {
        return $this->agent ? $this->agent : $this->airline;
    }

    public function hasAmendment()
    {
        return $this->amendments ? true : false;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['amendments'] = $this->amendments;
        $array['leg'] = $this->leg;
        $array['permission'] = $this->permission;
        $array['submission'] = $this->submission;
        $array['aircraft'] = $this->aircraft;
        $array['airline'] = $this->airline;
        $array['origin'] = $this->origin;
        $array['destination'] = $this->destination;
        $array['agent'] = $this->agent;
        return $array;
    }
}
