<div>
    <form wire:submit.prevent="submit">

        <div class="mt-4 border card p-2">
            <h3 class="text-info font-weight-bolder "> Aircraft Details :</h3>
            <div class="alert">

                <div class="form-row">
                    <div class="col">
                        <label for="name" class="font-weight-bold text-primary"> Country </label>
                        <select name="" id="" class="form-control" wire:model="selectedCountry" wire:change="$emit('countrySelected')" autofocus>
                            <option value=""> Select country</option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}"> {{$country->name}}</option>
                            @endforeach
                        </select>

                        @error('selectedCountry') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col">
                        <label for="name" class="font-weight-bold text-primary"> Registration </label>
                        <div class="input-group-prepend">
                            <input type="text" placeholder="country  letters" class="text-uppercase " wire:model="prefix">

                            <select class="form-control" wire:model="reg">
                                <option value=""> Please select </option>
                                @if($aircrafts)
                                @foreach($aircrafts as $aircraft)
                                <option value="{{$aircraft->id}}"> {{$aircraft->reg}}</option>
                                @endforeach
                                @endif
                            </select>

                        </div>
                        @error('reg') <span class="text-danger">{{ $message }}</span> @enderror
                        @error('prefix') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="alert">

                <div class="form-row">
                    <div class="col">
                        <label for="type" class="font-weight-bold text-primary"> A/c type </label>
                        <input type="text" wire:model="type" class="form-control" placeholder="e.g. A320..">
                        @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col">
                        <label for="capacity" class="font-weight-bold text-primary"> Capacity </label>
                        <input type="number" class="form-control" placeholder="number of pax " wire:model="capacity">
                        @error('capacity') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>
                </div>
            </div>


        </div>
        <div class="alert">
            <button type=submit class="btn btn-info float-right"> Continue</button>
            <a href="{{URL::previous()}}" class="btn btn-outline-info float-left">Back</a>
        </div>
    </form>


</div>
