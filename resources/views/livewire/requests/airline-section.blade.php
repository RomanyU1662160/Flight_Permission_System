<div>
    <div class="alert">
        <h3 class="text-info text-center">
            <p class="font-weight-bold"> Airline and Flight details </p>
            <label for="file"> Step 1 :</label>
            <progress id="file" value="5" max="100"> 32% </progress>

        </h3>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form action="" class="">
                <div class="mt-4 border card p-2">
                    <h3 class="text-info font-weight-bolder ">Airline Details :</h3>
                    <div class="alert">

                        <div class="form-row">
                            <div class="col">
                                <label for="name" class="font-weight-bold text-primary"> Airline Name</label>
                                <select id="" class="form-control" wire:model="airline" wire:change="$emit('airlineChanged')">
                                    <option value="" readonly> Select airline</option>
                                    @foreach($airlines as $airline)
                                    <option value="{{$airline->id}}"> {{$airline->name}}</option>
                                    @endforeach

                                </select>
                                @error('airline') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col">
                                <label for="icao" class="font-weight-bold text-primary"> ICAO code</label>
                                <input type="text" class="form-control text-uppercase" wire:model="icao" wire:keyup="$emit('icaoFieldChanged')">
                                @error('icao') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col">
                                <label for="iata" class="font-weight-bold text-primary"> IATA code</label>
                                <input type="text" class="form-control text-uppercase" wire:model.="iata" wire:keyup="$emit('iataFieldChanged')">
                                @error('iata') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="col">
                                <label for="icao" class="font-weight-bold text-primary"> Nationality</label>
                                <input type="text" class="form-control text-uppercase" wire:model="nationality" readonly>

                            </div>

                        </div>
                    </div>
                    </fieldset>
                </div>
                <div class="mt-4 card p-2">
                    <h3 class="text-info font-weight-bolder ">Flight Details :</h3>
                    <div class="alert">

                        <div class="form-row">
                            <div class="col">
                                <label for="nbr" class="font-weight-bold text-primary"> Flight Number: </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text  text-uppercase">{{$icao}}</div>
                                    </div>

                                    <input type="text" class="form-control" placeholder=" ">
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

                <div class="alert">
                    <button type=submit class="btn btn-info float-right"> Continue </button>
                </div>

            </form>

        </div>

        <div class="col-md-4">
            <livewire:summary-section>
        </div>
    </div>
</div>
