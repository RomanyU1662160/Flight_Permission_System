<div>
    <div class="mt-4 card p-2">
        <h3 class="text-info font-weight-bolder ">Flight Details :</h3>
        <div class="alert">

            <div class="form-row">
                <div class="col">
                    <label for="nbr" class="font-weight-bold text-primary"> Flight Number: </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text  text-uppercase" wire:model="icao">{{$icao}}</div>
                        </div>

                        <input type=" text" class="form-control" placeholder=" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="alert">
            <label for="name" class="font-weight-bold text-primary"> Flight purposes </label>

            <div class="row p-2">
                @foreach($purposes as $purpose)
                <div class="custom-control custom-checkbox col-md-6 border-bottom ">
                    <input type="checkbox" class="custom-control-input" id="{{$purpose->id}}" name="{{$purpose->id}}" value="{{$purpose->id}}" />
                    <label class="custom-control-label" for="{{$purpose->id}}">{{$purpose->name}} </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
