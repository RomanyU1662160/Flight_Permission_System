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
    protected $fillable = ['name', 'website', 'sita', 'aftn', 'address', 'phone'];

    public function permissions()
    {
        return $this->hasManyThrough(Permission::class, User::class, 'agent_id', 'requester_id');
    }

    public function submissions()
    {
        return $this->hasManyThrough(Submission::class, User::class, 'agent_id', 'requester_id');
    }

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
}
