<div>
    <h3 class="text-info text-center">
        <p class="font-weight-bold"> Airline and flight details </p>
        <label for="file"> Step 1 :</label>
        <progress id="file" value="5" max="100"> 32% </progress>

    </h3>
    <!-- Airline Details -->
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header bg-secondary" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3 class="text-info"> Airline Details <i class="fas fa-chevron-circle-down text-info"></i></h3>
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <form action="" class="">

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
                        <div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Flight details -->
            <div class="card">
                <div class="card-header bg-secondary" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class="text-info"> Flight details <i class="fas fa-chevron-circle-down text-info"></i> </h3>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="nbr"> Flight Number: </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text  text-uppercase">{{$icao}}</div>
                                    </div>

                                    <input type="text" class="form-control" placeholder=" ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="origin"> Origin: </label>
                                <select name="origin" id="" class="form-control">
                                    <option value=""> Select airport</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="origin-dof"> DOF: </label>
                                <input type="date" name="origin-dof" id="" class="form-control">
                            </div>

                            <div class="col">
                                <label for="etd"> ETD: </label>
                                <input type="time" name="etd" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="text-info"> Route details <i class="fas fa-chevron-circle-down text-info"></i> </h3>
                        </button>
                    </h2>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="origin"> Origin: </label>
                                <select name="origin" id="" class="form-control">
                                    <option value=""> Select airport</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="origin-dof"> DOF: </label>
                                <input type="date" name="origin-dof" id="" class="form-control">
                            </div>

                            <div class="col">
                                <label for="etd"> ETD: </label>
                                <input type="time" name="etd" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
