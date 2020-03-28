@extends('layouts.app')

@section('content')


 @foreach($flights as  $flight)

@include('flights.templates.flightTemplate')
 @endforeach
@endsection
