<?php

namespace App\Models;

use App\Models\Country;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{

    protected $fillable = ['name', 'icao', 'iata', 'info'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function scopeDepartures()
    {
        // dep
    }

    public function scopeArrivals()
    {
        // Arr
    }

}
