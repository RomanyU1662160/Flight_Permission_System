<?php

namespace App\Models;

use App\Models\Agent;
use App\Models\Aircraft;
use App\Models\Country;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = ['country_id', 'name', 'icao', 'iata', 'info'];

    public function permissions()
    {
        return $this->hasManyThrough(Permission::class, User::class, 'agent_id', 'requester_id');
    }

    public function submissions()
    {
        return $this->hasManyThrough(Submission::class, User::class, 'airline_id', 'requester_id');
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function aircrafts()
    {
        return $this->hasMany(Aircraft::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function officers()
    {
        return $this->hasMany(User::class);
    }
}
