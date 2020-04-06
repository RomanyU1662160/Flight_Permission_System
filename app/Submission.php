<?php

namespace App;

use App\Models\User;
use App\Models\Agent;
use App\Models\State;
use App\Models\Flight;
use App\Models\Amendment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Submission extends Model
{
    public $reference;
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

    //method  to set the submission reference
    private  function setRef($num = 1)
    {
        $latestSubmission  = Submission::latest()->first();
        if ($latestSubmission) {
            $latestRef =  $latestSubmission->id;
        } else {
            $latestRef = 0;
        }
        $reference = $latestRef + $num;
        $this->reference = $reference;
        return $reference;
    }

    // logic to create unique reference for new submission
    private function createReference()
    {
        $ref = $this->setRef();
        $currentTime = Carbon::now()->format('dmY');
        $newRef = "CAA-" . $currentTime . '-00' . ($ref);
        return $newRef;
    }


    public function getRef()
    {
        return $ref = $this->createReference();
    }
}
