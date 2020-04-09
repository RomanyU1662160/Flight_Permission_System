<?php

namespace App\Models;

use App\Models\Flight;
use App\Models\Amendment;
use App\Models\Permission;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function amendments()
    {
        return $this->hasMany(Amendment::class);
    }
}
