@extends('dashboard.layouts.default')

@section('dashboard.content')


@if($results->count())
<h3 class="text-info text-center"> {{$results->count()}} {{$results->count()<=1 ? 'Result' : "Results"}} </h3>
@foreach($results as $submission)

@include('submissions.templates.submissionTemplate')
@endforeach
<a href="{{URL::previous()}}" class="btn float-left btn-info">Back </a>
@else
<h3 class="text-danger">
    <a href="{{URL::previous()}}" class="btn btn-info">Back </a>
    No results try again
</h3>
@endif

@endsection
