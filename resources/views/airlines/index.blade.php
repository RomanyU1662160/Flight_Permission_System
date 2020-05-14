@extends('layouts.app')

@section('content')
<div class="container">
    @if($airlines->count())
    {{$airlines->links()}}
    @foreach($airlines as $airline)

    @include('airlines.templates.airlineTemplate')
    @endforeach
    @endif

</div>
@endsection
