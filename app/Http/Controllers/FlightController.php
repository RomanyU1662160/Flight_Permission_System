<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlightController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::latest()->paginate(12);
        //dd($flights);
        return view('flights.index', compact('flights'));
    }


    public function approve(Flight $flight)
    {
        $ref = Str::replaceFirst('CAA', 'PER', $flight->submission->ref);
        $permission = new Permission([
            'requester_id' => $flight->getRequester()->id,
            'approver_id' => Auth::user()->id,
            'state_id' => 1,
            'info' => 'null',
            'ref' => $ref,
        ]);
        $permission->save();
        // $flight->permission()->associate($permission);
        // $flight->save();
        $flight->update([
            'state_id' => 1,
            'permission_id' => $permission->id
        ]);
        return redirect()->back()->with('success', "You have approved this flight");
    }

    public function reject(Flight $flight)
    {

        if ($flight->permission) {
            $flight->permission->delete();
        }

        $flight->update([
            'state_id' => 4,
            'permission_id' => null
        ]);

        return redirect()->back()->with('danger', "You have rejected this flight");
    }

    public function pend(Flight $flight)
    {
        $permission = $flight->permission;
        $permission->delete();
        $flight->update([
            'state_id' => 3,
            'permission_id' => null
        ]);
        return redirect()->back()->with('danger', "You have pended  this flight");
    }

    public function underReview(Flight $flight)
    {
        $permission = $flight->permission;
        $permission->delete();
        $flight->update([
            'state_id' => 2,
            'permission_id' => null
        ]);
        return redirect()->back()->with('warning', "You changed the status of this flight to be under review ");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        $leg = $flight->leg;
        $submission = $flight->submission;
        $permission = $flight->permission;
        return view('flights.flightDetailsPage', compact('flight', 'submission', 'permission', 'leg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
