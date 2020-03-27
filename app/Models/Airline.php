<?php

namespace App\Models;

use App\Models\Agent;
use App\Models\Aircraft;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = ['country_id', 'name', 'icao', 'iata', 'info'];

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

}
