<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Agent;
use App\Models\Airline;
use App\Models\Country;
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


    public function getAddNewAgent()
    {
        return view('admins.newAgent.newAgentForm');
    }

    public function getAddNewUser()
    {
        return view('admins.dashboard.newUser.selectUserType');
    }

    public function registerNewCAA()
    {
        return view('admins.dashboard.newUser.registerNewCAA');
    }

    public function registerNewAirliner()
    {
        $airlines = Airline::all();
        return view('admins.dashboard.newUser.registerNewAirliner', compact('airlines'));
    }

    public function registerNewAgent()
    {
        $agents = Agent::all();
        return view('admins.dashboard.newUser.registerNewAgencyOfficer', compact('agents'));
    }



    public function getAddNewAirline()
    {
        $countries = Country::all();
        return view('admins.newAirlineForm', compact('countries'));
    }

    public function storeNewAgent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',

        ]);

        Agent::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'sita' => $request->input('sita'),
            'aftn' => $request->input('aftn'),
            'phone' => $request->input('phone'),
            'website' => $request->input('website'),
        ]);

        return redirect()->back()->with('success', "New agent added successfully.");
    }
    public function postAddNewAirline(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icao' => 'required',
            'iata' => 'required',
            'country' => 'required',

        ]);
        Airline::create([
            'name' => $request->input('name'),
            'country' => $request->input('country'),
            'icao' => $request->input('icao'),
            'iata' => $request->input('iata'),

        ]);
        return redirect()->back()->with('success', "New Airline added successfully.");
    }
}
