@extends('layouts.app')

@section('content')
@include('admins.templates.selectUserTypeForm')
@endsection
@section('scripts')
<script>
    console.log("Test logging");
</script>
@endsection
