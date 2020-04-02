@extends('layouts.app')


@section('content')
{{session()->get('airline') }}

<livewire:flight-section :airline="session()->get('airline')">
    @endsection
