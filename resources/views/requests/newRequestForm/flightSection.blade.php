@extends('layouts.app')


@section('content')
{{session()->get('airline') }}

<livewire:flight-details-section :airline="session()->get('airline')">
    @endsection
