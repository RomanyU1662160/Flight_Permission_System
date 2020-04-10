<?php

namespace App\Models;

use App\Models\Permission;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;

class Amendment extends Model
{
    protected $fillable = ['permission_id', 'flight_id', 'requester_id', 'approver_id', 'state_id', 'ref', 'info'];

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id', 'id');
    }


    public function approval()
    {
        return $this->belongsTo(User::class, 'approver_id', 'id');
    }
}
