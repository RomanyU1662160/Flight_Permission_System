<form action="{{route('amendments.add', $flight)}}" method="post">
    @csrf
    <div class="form-row">
        <div class="col">
            <label for="purpose" class="font-weight-bold text-primary"> Purpose </label>
            <select name="purpose" id="purpose" class="form-control">
                <option value=""> select purpose</option>
                @if(isset($purposes))
                @foreach($purposes as $purpose)
                <option value="{{$purpose->id}}" {{$flight->purposes->contains($purpose->id)? 'selected':'' }}>{{$purpose->name}}</option>
                @endforeach
                @endif
            </select>
            @error('airline') <span class="text-danger">{{ $message }}</span> @enderror
        </div>


        <div class="col">
            <label for="nbr" class="font-weight-bold text-primary"> Flight NBR </label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">{{$flight->airline->icao}}</div>
                </div>
                <input type="text" class="form-control" name="nbr" value="{{old('nbr')? old('nbr') : $flight->nbr}}">
            </div>
        </div>

        @if($flight->permission)
        <div class="col">

            <label for="permission_ref" class="font-weight-bold text-primary"> Permission Reference</label>
            <div class="input-group mb-2">
                <input type="text" name="permission_ref" class="form-control" value="{{$flight->permission->ref}}" readonly>
            </div>
        </div>
        @endif

        @if($flight->submission)
        <div class="col">

            <label for="submission_ref" class="font-weight-bold text-primary"> Submission Reference </label>
            <div class="input-group mb-2">
                <input type="text" name="submission_ref" class="form-control" value="{{$flight->submission->ref}}" readonly>
            </div>
        </div>
        @endif

    </div>


    <div class="form-row mt-2">
        <div class="col">
            <label for="origin" class="font-weight-bold text-primary"> Origin </label>
            <select name="origin" id="origin" class="form-control">
                <option value=""> Select Origin</option>
                @if(isset($airports))
                @foreach($airports as $airport)
                <option value="{{$airport->id}}" {{$airport->id == $flight->origin_id ? 'selected' : ''}}>{{$airport->name}}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="col">
            <label for="origin_dof" class="font-weight-bold text-primary"> DOF </label>
            <input type="date" name="origin_dof" class="form-control" value="{{old('origin_dof')? old('origin_dof'): $flight->origin_dof->format('Y-m-d')}}">
        </div>
        <div class="col">
            <label for="etd" class="font-weight-bold text-primary"> ETD </label>
            <input type="time" name="etd" class="form-control" value="{{old('etd')? old('etd'): $flight->etd->format('H:i')}}">
        </div>


    </div>

    <div class="form-row mt-2">
        <div class="col">
            <label for="purpose" class="font-weight-bold text-primary"> Destination </label>
            <select name="destination" id="destination" class="form-control">
                <option value=""> Select Destination</option>
                @if(isset($airports))
                @foreach($airports as $airport)
                <option value="{{$airport->id}}" {{$airport->id == $flight->destination_id ? 'selected' : ''}}>{{$airport->name}}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="col">
            <label for="destination_dof" class="font-weight-bold text-primary"> DOF </label>
            <input type="date" name="destination_dof" class="form-control" value="{{old('destination_dof')? old('destination_dof'): $flight->destination_dof->format('Y-m-d')}}">
        </div>
        <div class="col">
            <label for="eta" name="eta" class="font-weight-bold text-primary"> ETA </label>
            <input type="time" name="eta" class="form-control" value="{{old('eta')? old('eta'): $flight->eta->format('H:i')}}">
        </div>

    </div>

    <div class="alert pt-4">
        <button type="submit" class="btn btn-secondary text-info float-right font-weight-bolder p-2"> Submit Amendment </button>
    </div>
</form>
