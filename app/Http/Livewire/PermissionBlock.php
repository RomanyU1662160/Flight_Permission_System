<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PermissionBlock extends Component
{
    public $permission;

    public function mount($permission)
    {
        return $this->permission = $permission;
    }

    public function render()
    {
        return view('livewire.permission-block');
    }
}
