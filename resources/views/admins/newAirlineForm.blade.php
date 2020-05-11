@extends('admins.layouts.default')


@section('admin.content')

<div class="container">
    <h3 class="text-center text-info"> Add New Airline </h3>

    <form action="{{route('admin.new.airline')}}" method="post">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="name"> Airline name </label>
                    <input type="text" class="form-control  @error('name') is-invalid  @enderror" placeholder="airline name" name="name" id="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                    @enderror
                </div>


            </div>
            <div class="col">
                <div class="form-group">
                    <label for="country"> Nationality </label>
                    <select class="form-control   @error('country') is-invalid  @enderror" name="country" id="country">
                        <option value=""> Select country</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}"> {{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                    @enderror
                </div>
            </div>

        </div>


        <div class="form-row">
            <div class="col">

                <div class="form-group">
                    <label for="icao"> ICAO </label>
                    <input type="text" class="form-control  @error('icao') is-invalid  @enderror" placeholder="icao" name="icao" id="icao">
                    @error('icao')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>
            <div class="col">
                <div class="form-group">
                    <label for="iata"> IATA </label>
                    <input type="text" class="form-control  @error('iata') is-invalid  @enderror" placeholder="iata" name="iata" id="iata">
                    @error('iata')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                    @enderror
                </div>
            </div>

        </div>


        <div class="alert">
            <button class="btn btn-info float-right"> Add New Airline </button>
        </div>
    </form>

</div>

@endsection
