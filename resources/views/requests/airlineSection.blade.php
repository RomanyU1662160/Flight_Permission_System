@extends('layouts.app')


@section('content')
<div>
    <div class="alert">
        <h3 class="text-info text-center">
            <p class="font-weight-bold"> Airline and Flight details </p>
            <label for="file"> Step 1 :</label>
            <progress id="file" value="5" max="100"> 32% </progress>

        </h3>
    </div>


    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                @csrf
                <livewire:airline-section>

                    <div class="alert">
                        <button type=submit class="btn btn-info float-right"> Continue </button>
                    </div>
            </form>
        </div>
        <div class="col-md-4">
            <livewire:summary-section>
        </div>
    </div>



</div>
@endsection
