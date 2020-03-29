<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PermissionsList extends Component
{

    public $permissions;

    public function mount($permissions)
    {
        return $this->permissions = $permissions;
    }



    public function render()
    {
        return view('livewire.permissions.permissions-list');
    }
}
