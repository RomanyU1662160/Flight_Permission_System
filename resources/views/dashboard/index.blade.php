@extends('dashboard.layouts.default')

@section('dashboard.content')

<div class="alert">
    <h4 class="text-info text-center">{{Auth::user()->getFullName()}}'s Dashboard</h4>
</div>

@endsection
