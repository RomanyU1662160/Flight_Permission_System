@extends('admins.layouts.default')


@section('admin.content')

<div class="container">
    <h3 class="text-center text-info"> Add New Agent </h3>

    <form action="{{route('admin.newAgent')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name"> Agent Name </label>
            <input type="text" class="form-control @error('name') is-invalid  @enderror  " placeholder="name" name="name" id="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>

            @enderror
        </div>

        <div class="form-group">
            <label for="name"> Website </label>
            <input type="text" class="form-control" placeholder="website" name="website" id="website">
        </div>
        <div class="form-row">
            <div class="col">

                <div class="form-group">
                    <label for="sita"> Sita </label>
                    <input type="text" class="form-control" placeholder="website" name="sita" id="sita">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="aftn"> AFTN </label>
                    <input type="text" class="form-control" placeholder="website" name="aftn" id="aftn">
                </div>
            </div>

        </div>

        <div class="form-row">
            <div class="col">

                <div class="form-group">
                    <label for="phone"> Contact Number </label>
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" placeholder="phone" name="phone" id="phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="address"> Address </label>
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" placeholder="address" name="address" id="address">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                    @enderror
                </div>
            </div>

        </div>

        <div class="alert">
            <button class="btn btn-info float-right"> Add New Agent </button>
        </div>
    </form>

</div>

@endsection
