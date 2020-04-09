@extends('layouts.app')


@section('content')
<div>
    <div class="alert">
        <h3 class="text-info text-center">
            <p class="font-weight-bold"> details </p>
            <label for="file"> Step 4 :</label>
            <progress id="file" value="80" max="100"> 80 </progress>

        </h3>
    </div>


    <div class="row pl-2 pr-2">
        <div class="col-md-8 offset-md-1">
            <livewire:schedule-section>
        </div>
        <div class=" col-md-3 ">
            <livewire:summary-section>
        </div>
    </div>



</div>
@endsection
