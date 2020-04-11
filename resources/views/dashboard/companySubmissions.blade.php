@extends('dashboard.layouts.default')

@section('dashboard.content')

<div class="row mt-4">
    <div class="col-md-8">
        <h3 class="text-info text-center"> Submissions by {{$company->name}}</h3>

    </div>


    <div class="col-md-4 form-group">

        <form class="form-inline" action="{{route('requests.search')}}" method="post">

            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text"> CAA-</div>
                </div>
                <input type="text" class="form-control  @error('search') is-invalid @enderror" id="search" name="search" placeholder="submission ref">
                <div class="input-group-prepend">

                    <button type="submit" class=" btn btn-outline-secondary "> <i class="fas fa-search"></i>
                    </button>

                </div>
            </div>
        </form>
        @error('search')
        <p class="text-danger"> {{message}} </p>
        @enderror
    </div>

</div>


{{$submissions->links()}}
@foreach( $submissions as $submission )
@include('submissions.templates.submissionTemplate')
@endforeach

@endsection
