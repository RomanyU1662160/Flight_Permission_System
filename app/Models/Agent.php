<?php

namespace App\Models;

use App\Models\Submission;
use App\Models\User;
use App\Models\Flight;
use App\Models\Airline;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['name', 'website', 'sita', 'aftn'];

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function clients()
    {
        return $this->hasMany(Airline::class);
    }

    public function officers()
    {
        return $this->hasMany(User::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
