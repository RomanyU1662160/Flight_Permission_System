@extends('admins.layouts.default')


@section('admin.content')
<h3 class="text-center text-info"> All Users</h3>
{{$users->links()}}
@foreach($users as $user)
@include('users.templates.userTemplate')
@endforeach


@endsection
