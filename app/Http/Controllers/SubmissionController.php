<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Country;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SubmissionController extends Controller
{
    public function index()
    {
        $submissions =  Submission::where('state_id', 2)->latest()->paginate(4);

        return view('submissions.index', compact('submissions'));
    }


    public function show(Submission $submission)
    {

        return view('submissions.details', compact('submission'));
    }

    public function getSubmittedRequests()
    {
        $requests = Submission::paginate(4);
        return view('submissions.index', compact('requests'));
    }

    public function startNewRequest()
    {
        Session::forget(['airline', 'leg1', 'leg2', 'aircraft']);
        $newFlight = new Flight();
        return view('submissions.newRequestForm.airlineSection', compact('newFlight'));
    }

    public function getAirlineSection_step1()
    {
        $newFlight = new Flight();
        return view('submissions.newRequestForm.airlineSection', compact('newFlight'));
    }

    public function getFlightSection_step2()
    {
        return view('submissions.newRequestForm.flightSection');
    }

    public function getAircraftSection_step3()
    {
        $countries = Country::all();
        return view('submissions.newRequestForm.aircraftSection', compact('countries'));
    }
    public function getDetailsSection_step4()
    {

        return view('submissions.newRequestForm.reviewDetailsSection');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        $results = Submission::where('ref', 'like', '%' . $query)->get();
        return view('dashboard.search.submissons.submissionResults', compact('results'));
    }
}
