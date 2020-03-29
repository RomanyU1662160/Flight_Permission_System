<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Airline;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {

        ///
    }

    public function selectUserType()
    {
        return view('admins.newUser.selectUserType');
    }

    public function registerNewCAA()
    {
        return view('admins.newUser.registerNewCAA');
    }

    public function registerNewAirliner()
    {
        $airlines = Airline::all();
        return view('admins.newUser.registerNewAirliner', compact('airlines'));
    }

    public function registerNewAgent()
    {
        $agents = Agent::all();
        return view('admins.newUser.registerNewAgencyOfficer', compact('agents'));
    }






    protected function validator(array $data)
    {
        $v = Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // validate the role input id the airline and the agent inputs are not exist
        $v->sometimes('role', "required", function ($data) {
            //dd($data);
            // dd(!Arr::hasAny($data, ['agent']));

            return !Arr::hasAny($data, ['airline', 'agent']);
        });

        // validate the airline input id the role and the agent inputs are not exist
        $v->sometimes('airline', 'required', function ($data) {
            return  !Arr::hasAny($data, ['role', 'agent']);
        });

        // validate the agent input id the airline and the role inputs are not exist
        $v->sometimes('agent', 'required', function ($data) {
            return !Arr::hasAny($data, ['role', 'airline']);
        });

        return $v;
    }

    public  function storeNewUser(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $this->validator($request->all())->validate();
        User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'username' => $data['fname'] . $data['lname'],
            'airline' => Arr::has($data, 'airline') ? $data['airline'] : null,
            'agent' =>   Arr::has($data, 'agent') ? $data['agent'] : null,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->back()->with('success', " success ");
    }
}
