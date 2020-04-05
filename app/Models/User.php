<?php

namespace App\Models;

use App\Submission;
use App\Models\Role;
use App\Models\Agent;
use App\Models\Permission;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'airline_id', 'agent_id', 'username', 'email', 'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function approvals()
    {
        return $this->hasMany(Permission::class);
    }

    public function getCompany()
    {
        if ($this->agent) {
            return $this->agent->name;
        } elseif ($this->airline) {
            return  $this->airline->name;
        } else {
            return "CAA officer";
        }
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
