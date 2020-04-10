@extends('layouts.app')


@section('content')
<div class="container">
    <div class="alert bg-secondary">
        <h3 class="text-info text-center font-weight-bolder"> Amend Flight {{$flight->callsign}}</h3>
    </div>
    @include('amendments.templates.amendmentFormTemplate')

</div>
@endsection
