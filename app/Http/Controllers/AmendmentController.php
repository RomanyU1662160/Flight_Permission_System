<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Airport;
use App\Models\Purpose;
use App\Models\Amendment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmendmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Flight $flight)
    {
        $purposes = Purpose::all();
        $airports = Airport::all();
        return view('amendments.addAmendment', compact(['flight', 'purposes', 'airports']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Flight $flight)
    {
        $data = $request->all();
        $flight->submission->update([
            'requester_id' => Auth::user()->id,
            'approver_id' => null,
            'state_id' => 2,
        ]);
        //  $ref = Str::replaceFirst('CAA', 'PER', $flight->submission->ref);

        $ref = Str::replaceFirst('CAA', 'AMD',  $flight->submission->ref);
        $newAmendment = Amendment::create(
            [
                'ref' => $ref,
                'requester_id' => Auth::user()->id,
                'permission_id' => null,
                'approver_id' => null,
                'state_id' => 2,
                'flight_id' => $flight->id,
            ]
        );

        $newAmendment->save();
        if ($flight->permission) {
            $flight->permission->update([
                'state_id' => 5,
            ]);
        }

        $airlineIcao = $flight->airline->icao;

        $flight->update([
            'state_id' => 2,
            'origin_id' => $request->input('origin'),
            'origin_dof' => $request->input('origin_dof'),
            'destination_id' => $request->input('destination'),
            'destination_dof' => $request->input('destination_dof'),
            'callsign' => $airlineIcao . $request->input('nbr'),
            'nbr' => $request->input('nbr'),
            'eta' => $request->input('eta'),
            'etd' => $request->input('etd'),
            'permission_id' => null,
        ]);
        $flight->amendments()->save($newAmendment);


        return redirect()->route('flights.show', $flight)->with('success', "Your amendment for {$flight->callsign} has beed submitted.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
