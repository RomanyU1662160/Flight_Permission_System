<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Permission;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function getSubmittedRequests()
    {
        $permissions = Permission::submitted()->get();
        return view('permissions.submitted', compact('permissions'));
    }


    public function getAirlineSection_step1()
    {
        $newFlight = new Flight();
        return view('requests.newRequestForm.airlineSection', compact('newFlight'));
    }
    /*
    public function postAirlineSection_step1(Request $request)
    {
        //dd($request);
        $request->validate([
            'airline' => 'required',
            'icao' => 'required',
            'iata' => 'required',
        ]);

        return view('requests.newRequestForm.routeSection');
    }
*/
    public function getFlightSection_step2()
    {
        return view('requests.newRequestForm.flightSection');
    }
}