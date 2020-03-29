<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class PermissionBlock extends Component
{


    public $permission;


    public function mount($permission)
    {
        return $this->permission = $permission;
    }

    public function render()
    {
        return view('livewire.permissions.permission-block');
    }
}
