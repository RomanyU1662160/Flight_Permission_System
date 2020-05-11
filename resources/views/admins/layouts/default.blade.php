@extends('layouts.app')

@section('title' , 'Admin dashboard')

@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-3 ">
            @include('admins.layouts.sideNav')
        </div>

        <div class="col-md-6 offset-md-1">
            @yield('admin.content')
        </div>
    </div>
</div>
@endsection
