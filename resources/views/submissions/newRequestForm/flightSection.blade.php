@extends('layouts.app')


@section('content')
<div>


    <div class="row pl-2 pr-2">
        <div class="col-md-8 offset-md-1">

            <livewire:flight-section>
        </div>
        <div class=" col-md-3 ">
            <livewire:summary-section>
        </div>
    </div>



</div>
@endsection
