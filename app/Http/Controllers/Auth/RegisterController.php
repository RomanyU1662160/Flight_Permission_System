<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Agent;
use App\Models\Airline;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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
            // dd($data);
            return !Arr::hasAny($data, ['data.airline', 'data.agent']);
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


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'username' => $data['fname'] . $data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
