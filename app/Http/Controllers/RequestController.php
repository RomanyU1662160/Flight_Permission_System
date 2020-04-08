<?php

namespace App\Http\Controllers;


use App\Models\Flight;
use App\Models\Country;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SubmissionController extends Controller
{

    public function getSubmittedRequests()
    {
        $requests = Submission::paginate(2);
        return view('requests.index', compact('requests'));
    }

    public function startNewRequest()
    {
        Session::forget(['airline', 'leg1', 'leg2', 'aircraft']);
        $newFlight = new Flight();
        return view('requests.newRequestForm.airlineSection', compact('newFlight'));
    }

    public function getAirlineSection_step1()
    {
        $newFlight = new Flight();
        return view('requests.newRequestForm.airlineSection', compact('newFlight'));
    }

    public function getFlightSection_step2()
    {
        return view('requests.newRequestForm.flightSection');
    }

    public function getAircraftSection_step3()
    {
        $countries = Country::all();
        return view('requests.newRequestForm.aircraftSection', compact('countries'));
    }
    public function getDetailsSection_step4()
    {

        return view('requests.newRequestForm.reviewDetailsSection');
    }
}
