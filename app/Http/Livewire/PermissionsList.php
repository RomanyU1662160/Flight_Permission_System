<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use Livewire\Component;
use Livewire\WithPagination;

class PermissionsList extends Component
{

    use WithPagination;


    public function render()
    {

        return view('livewire.permissions.permissions-list', [
            'permissions' => Permission::latest()->submitted()->paginate(6)
        ]);
    }
}
