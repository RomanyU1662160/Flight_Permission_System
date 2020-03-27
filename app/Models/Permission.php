<?php

namespace App\Models;

use App\Models\Agent;
use App\Models\Amendment;
use App\Models\Flight;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['requester_id', 'approver_id', 'state_id', 'ref', 'info'];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function amendments()
    {
        return $this->hasMany(Amendment::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
