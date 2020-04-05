<?php

namespace App;

use App\Models\User;
use App\Models\Agent;
use App\Models\State;
use App\Models\Flight;
use App\Models\Amendment;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
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


    public function approval()
    {
        return $this->belongsTo(User::class, 'approver_id', 'id');
    }


    // apply style based on the status
    public function applyStyle()
    {
        if ($this->state->name === "under review") {
            return "bg-warning";
        } elseif ($this->state->name === "approved") {
            return "bg-success";
        } else {
            return "bg-danger";
        }
    }

    public function hasAmendment()
    {
        return  $this->amendments()->count() >= 1 ? true : false;
    }
}
