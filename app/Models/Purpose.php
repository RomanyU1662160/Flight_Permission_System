<?php

namespace App\Models;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    protected $fillable = ['name', 'info'];

    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }
}
