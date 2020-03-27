<?php

namespace App\Models;

use App\Models\Amendment;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function amendment()
    {
        return $this->hasMany(Amendment::class);
    }
}
