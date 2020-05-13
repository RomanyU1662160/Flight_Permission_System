@extends('dashboard.layouts.default')

@section('dashboard.content')

<div class="container">
    <h2 class="text-info text-center"> Create Custom Report </h2>
    <form action="{{route('dashboard.report.custom')}}" method="post">
        @csrf
        <div class="form-row">
            <div class="col">
                <label for="start"> From </label>
                <input type="date" class="form-control @error('start') is-invalid  @enderror" id="start" name="start">
                @error('start')
                <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>
            <div class="col">
                <label for="end"> To </label>
                <input type="date" class="form-control @error('end') is-invalid  @enderror" id="end" name="end">
                @error('end')
                <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>

        </div>
        <div class="alert">

            <button class="btn btn-info float-right"> Create Report</button>
        </div>


    </form>
</div>

@endsection
