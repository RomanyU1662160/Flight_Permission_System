@extends('dashboard.layouts.default')

@section('dashboard.content')

<h3 class="text-info text-center"> Submissions by {{$company->name}}</h3>
{{$submissions->links()}}
@foreach( $submissions as $submission )
@include('submissions.templates.submissionTemplate')
@endforeach

@endsection
