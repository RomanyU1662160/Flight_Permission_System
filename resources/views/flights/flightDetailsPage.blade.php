@extends('layouts.app')

@section('content')

<div class="container-fluid p-2">
    <h3 class="text-center text-info"> {{$flight->callsign}} </h3>
    @include('flights.templates.flightDetailsTemplate')
</div>
@endsection
