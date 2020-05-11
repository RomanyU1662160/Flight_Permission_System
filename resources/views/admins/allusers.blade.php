@extends('admins.layouts.default')


@section('admin.content')
<h3 class="text-center text-info">
    @foreach($users as $user)
    @include('users.templates.userTemplate')
    @endforeach
    @endsection
