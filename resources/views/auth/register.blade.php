@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <h3 class="text-info text-center"> {{__('You need to contact the ECAA admin to signup')}} </h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    console.log("Test logging");
</script>
@endsection
