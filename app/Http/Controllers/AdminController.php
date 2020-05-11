<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getAdminDashBoard(User $user)
    {
        return view('admins.dashboard', compact('user'));
    }


    public function getAllUsers()
    {
        $users = User::paginate(4);
        $roles = Role::all();
        return view('admins.allusers', compact(['users', 'roles']));
    }

    public function updateRoles(Request $request, User $user)
    {
        $data = $request->except('_token');
        $user->roles()->sync($data);
        $user->save();
        return redirect()->back()->with('success', "You have updated roles successfully.");
    }
}
