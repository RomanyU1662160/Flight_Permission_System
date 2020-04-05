<?php

namespace App\Models;

use App\Submission;

use App\Models\Agent;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Purpose;
use App\Models\Aircraft;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;


class Flight extends Model
{
    protected $fillable = ['airline_id', 'leg_id', 'agent_id', 'origin_id', 'destination_id', 'aircraft_id', 'nbr', 'callsign', 'origin_dof', 'destination_dof', 'etd', 'eta', 'info'];

    protected  $dates = ['destination_dof', 'origin_dof', 'etd', 'eta'];

    public function purposes()
    {
        return $this->belongsToMany(Purpose::class);
    }


    // get the second leg of the flight
    public function leg()
    {
        return $this->hasOne(Flight::class, 'leg_id', 'id');
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
}
