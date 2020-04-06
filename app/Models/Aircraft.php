<?php

namespace App\Models;

use App\Models\Flight;
use App\Models\Airline;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $fillable = ['country_id', 'reg', 'type', 'capacity'];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function flight()
    {
        return $this->hasOne(Flight::class);
    }
}
