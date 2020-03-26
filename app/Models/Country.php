<?php

namespace App\Models;

use App\Models\Airline;
use App\Models\Airport;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'info'];

    public function airports()
    {
        return $this->hasMany(Airport::class);
    }

    public function airlines()
    {
        return $this->hasMany(Airline::class);
    }

}
