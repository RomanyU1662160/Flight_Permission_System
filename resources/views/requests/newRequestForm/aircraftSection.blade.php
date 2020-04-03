@extends('layouts.app')


@section('content')

<h3> Aircraft section</h3>
<div class="alert"> {{session()->get('leg1') }}</div>
<div class="alert">{{session()->get('leg2') }} </div>

@endsection
