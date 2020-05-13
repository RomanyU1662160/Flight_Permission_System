@extends('dashboard.layouts.default')

@section('dashboard.content')

<div class="alert">
    <h2 class="text-center"> Approved Flights from {{$startDate}} to {{$endDate}} </h2>
</div>
<div class="container-fluid">
    <table class="table table-hover">
        <thead>
            <th>Call Sign </th>
            <th>Origin</th>
            <th>Origin_Dof </th>
            <th>Destination</th>
            <th>Destination_DoF</th>
            <th> Airline </th>
            <th> Agent </th>
        </thead>
        @if($flights->count())
        @foreach($flights as $flight)
        <tr>
            <td> {{$flight->callsign}} </td>
            <td> {{$flight->origin->name}} </td>
            <td> {{$flight->origin_dof->format('d-M-Y')}} </td>
            <td> {{$flight->destination->name}} </td>
            <td> {{$flight->destination_dof->format('d-M-Y')}} </td>
            <td> {{$flight->airline->name}} </td>
            <td> {{$flight->airline->country->name}} </td>



        </tr>
        @endforeach
        @endif
    </table>

</div>

@endsection
