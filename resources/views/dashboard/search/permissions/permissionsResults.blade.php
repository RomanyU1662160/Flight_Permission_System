@extends('dashboard.layouts.default')

@section('dashboard.content')


@if($results->count())
<h3 class="text-info text-center"> {{$results->count()}} Results </h3>
@foreach($results as $permission)

@include('permissions.templates.permissionTemplate')
@endforeach
<a href="{{URL::previous()}}" class="btn float-left btn-info">Back </a>
@else
<div class="alert bg-light">
    <h3 class="text-danger text-center">
        <a href="{{URL::previous()}}" class="btn btn-info">Back </a>
        No results try again
    </h3>
</div>
@endif

@endsection
