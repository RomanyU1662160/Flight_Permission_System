@extends('layouts.app')

@section('content')
<div class="container p-4">
    <div class="row align-middle pt-5 ">
        <div class=" card col-md-3 jumbotron m-2  ">
            <a href="" class="btn btn-link">
                <h3 class="text-primary text-center "> New CAA Officer </h3>
            </a>
        </div>
        <div class=" card col-md-3 jumbotron m-2  ">

            <a href="" class="btn btn-link">
                <h3 class="text-primary text-center "> New Aviation Agent Officer </h3>
            </a>

        </div>


        <div class=" card col-md-3 jumbotron m-2  ">
            <a href="" class="btn btn-link">
                <h3 class="text-primary text-center "> New Airline Officer</h3>
            </a>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    console.log("Test logging");
</script>
@endsection
