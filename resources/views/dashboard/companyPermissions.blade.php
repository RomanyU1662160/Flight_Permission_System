@extends('dashboard.layouts.default')

@section('dashboard.content')

<h3 class="text-info text-center"> Permissions for {{$company->name}}</h3>
{{$permissions->links()}}
@foreach( $permissions as $permission )
@include('permissions.templates.permissionTemplate')
@endforeach

@endsection
