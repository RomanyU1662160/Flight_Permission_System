<div>
    <form action="{{route('requests.new.step1')}}" method="post" wire:submit.prevent="submit">
        @csrf
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
                        <input type="text" class="form-control text-uppercase" value="" wire:model="icao" wire:keyup="$emit('icaoFieldChanged')">
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

        </div>
        <div class="alert">
            <button type=submit class="btn btn-info float-right"> Continue</button>
        </div>
    </form>


</div>
