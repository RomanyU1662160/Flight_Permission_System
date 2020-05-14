@extends('layouts.app')


@section('content')

<div class="container">
    <h3 class="text-info text-center"> All submissions </h3>
    {{ $submissions->links()}}
    @foreach( $submissions as $submission )
    @include('submissions.templates.submissionTemplate')
    @endforeach
</div>
@endsection

@section('scripts')


@endsection
