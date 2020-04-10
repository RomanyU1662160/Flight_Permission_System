@extends('dashboard.layouts.default')

@section('dashboard.content')

<h3 class="text-info text-center"> Submissions by {{$user->getFullName()}} (<small> {{$user->getCompany()->name}})</small></h3>

@foreach( $submissions as $submission )
@include('submissions.templates.submissionTemplate')
@endforeach

@endsection
