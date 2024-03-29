@extends('layouts.app')


@section('content')

<div class="bg-secondary text-warning p-2  rounded ">
    <ul class="nav nav-pills nav-fill border">
        <li class="nav-item ">
            <a class="text-warning nav-link {{request()->is('/details/*')? 'active' : ''}}" href="{{route('dashboard.myDetails',Auth::user())}}"> My Details </a>
        </li>
        <li class="nav-item ">
            <a class="text-warning nav-link {{request()->is('dashboard/companySubmissions/*')? 'active' : ''}} " href="{{route('dashboard.companySubmissions',Auth::user())}}">All submissions</a>
        </li>
        <li class="nav-item ">
            <a class="text-warning nav-link {{request()->is('dashboard/userSubmissions/*')? 'active' : ''}} " href="{{route('dashboard.userSubmissions',Auth::user())}}">My submissions </a>
        </li>
        <li class="nav-item ">
            <a class="text-warning nav-link  {{request()->is('dashboard/approvedPermissions/*')? 'active' : ''}}" href="{{route('dashboard.approvedPermissions',Auth::user())}}">Approved permissions </a>
        </li>
        <li class="nav-item ">
            <a class="text-warning nav-link" href="{{route('dashboard.trackPermission')}}">Track permission </a>
        </li>
        <li class="nav-item ">
            <a class="text-warning nav-link" href="{{route('dashboard.report.custom')}}"> Reports </a>
        </li>


    </ul>
</div>
<div class="container">

    @yield('dashboard.content')
</div>

</div>

@endsection
