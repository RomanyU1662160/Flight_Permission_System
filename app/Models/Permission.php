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

    public function scopeSubmitted($query)
    {
        return $query->where('state_id', 2);
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id', 'id');
    }


    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id', 'id');
    }

    public function applyStyle()
    {
        if ($this->state->name === "under review") {
            return "bg-warning";
        } elseif ($this->state->name === "approved") {
            return "bg-success text-white rounded";
        } else {
            return "bg-danger text-white";
        }
    }

    public function hasAmendment()
    {

        return  $this->amendments()->count() >= 1 ? true : false;
    }

    public function isApproved()
    {
        $flights = $this->flights;
        foreach ($flights as $flight) {
            return   $flight->state == 1 ? true : false;
        }
        return false;
    }
}
