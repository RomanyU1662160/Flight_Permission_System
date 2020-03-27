<?php

namespace App\Models;

use App\Models\Agent;
use App\Models\Aircraft;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Permission;
use App\Models\Purpose;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['airline_id', 'agent_id', 'origin_id', 'destination_id', 'aircraft_id', 'nbr', 'callsign', 'dof', 'etd', 'eta', 'info'];

    public function purposes()
    {
        return $this->belongsToMany(Purpose::class);
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class);
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
