<?php

namespace App\Models;

use App\Models\Permission;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;

class Amendment extends Model
{
    protected $fillable = ['permission_id', 'requester_id', 'approver_id', 'state_id', 'ref', 'info'];

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
