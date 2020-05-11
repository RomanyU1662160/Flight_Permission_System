@extends('dashboard.layouts.default')

@section('dashboard.content')
<div class="row">
    <div class="col-md-3">
        <img src="{{asset('assets/avatar.png')}}" alt="logo">


    </div>
    <div class="col-md-9">

        @include('users.templates.userTemplate')
    </div>

</div>


@endsection
