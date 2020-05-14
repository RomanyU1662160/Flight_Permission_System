@extends('layouts.app')

@section('content')
<div class="container">

    @if(!$flights->count())
    <p class="text-info  text-center"> No Approved flights to show </p>

    @else @foreach($flights as $flight)

    @include('flights.templates.flightTemplate')
    @endforeach
    @endif </div> @endsection
