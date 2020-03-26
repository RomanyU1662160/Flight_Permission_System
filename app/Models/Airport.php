<?php

namespace App\Models;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{

    protected $fillable = ['name', 'info'];
    // protected $fillable = ['name', 'info'];

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
