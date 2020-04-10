<div>
    <div class="alert">
        <h3 class="text-info text-center">
            <p class="font-weight-bold"> Airline and Flight details </p>
            <label for="file"> Step 2 :</label>
            <progress id="file" value="30" max="100"> 32% </progress>

        </h3>
    </div>
    <form wire:submit.prevent="submit">
        <div class="mt-4  card p-2">
            <h3 class="text-info font-weight-bolder ">Flight Details :</h3>
            <div class="alert">

                <div class="form-row">
                    <div class="col">
                        <label for="" class="font-weight-bold text-primary"> Number: </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text  text-uppercase">{{$airline->icao}}</div>
                            </div>

                            <input type=" text" class="form-control" placeholder="" wire:model="L1nbr">
                        </div>
                    </div>

                    <div class="col">
                        <label for="same" class="font-weight-bold text-primary"> Call sign: </label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" wire:model="L1callsign">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" id="same" wire:change="setL1Callsign">
                                    Same as flight number
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <!-- Leg1 section  -->
            <div class="alert">
                <div class="form-row">
                    <div class="col">
                        <label for="origin" class="font-weight-bold text-primary"> Origin: </label>
                        <select class="form-control   @error('l1_origin_name') is-invalid @enderror   " wire:model="l1_origin_name" wire:change="setOriginIcaoIataValues('{{$l1_origin_name}}')">
                            <option value=""> Select airport</option>
                            @if(isset($airports))
                            @foreach($airports as $airport)
                            <option value="{{$airport->id}}"> {{$airport->name}} </option>
                            @endforeach

                            @endif
                        </select>
                        @error('l1_origin_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="origin_dof" class="font-weight-bold text-primary"> ICAO: </label>
                        <input type="text" class="form-control text-uppercase @error('l1_origin_icao') is-invalid @enderror  " wire:model="l1_origin_icao" wire:input="setOriginNameIataValues('{{ $l1_origin_icao }}')">

                        @error('l1_origin_icao') <span class="text-danger">{{ $message }}</span> @enderror
                        {{$l1_origin_icao}}
                    </div>


                    <div class="col">
                        <label for="origin_dof" class="font-weight-bold text-primary"> IATA: </label>
                        <input type="text" class="form-control text-uppercase text-uppercase @error('l1_origin_iata') is-invalid @enderror " wire:model="l1_origin_iata" wire:keyup="setOriginNameIcaoValues">
                        @error('l1_origin_iata') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="origin_dof" class="font-weight-bold text-primary @error('l1_origin_dof') is-invalid @enderror "> DOF: </label>
                        <input type="date" class="form-control" wire:model="l1_origin_dof">
                        @error('l1_origin_dof') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col">
                        <label for="etd" class="font-weight-bold text-primary  @error('l1_origin_etd') is-invalid @enderror "> ETD: </label>
                        <input type="time" id="" class="form-control" wire:model="l1_origin_etd">
                        @error('l1_origin_etd') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>



                </div>

            </div>

            <!-- leg1-destination -->

            <div class="alert">
                <div class="form-row">
                    <div class="col">
                        <label for="destination" class="font-weight-bold text-primary"> Destination: </label>
                        <select id="" class="form-control  @error('l1_destination_name') is-invalid @enderror " wire:model="l1_destination_name" wire:change="setDestinationIcaoIataValues">
                            <option value=""> Select airport</option>
                            @if(isset($airports))
                            @foreach($airports as $airport)
                            <option value="{{$airport->id}}"> {{$airport->name}} </option>
                            @endforeach

                            @endif
                        </select>
                        @error('l1_destination_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="destination_dof" class="font-weight-bold text-primary text-uppercase"> ICAO: </label>
                        <input type="text" class="form-control  @error('l1_destination_icao') is-invalid @enderror" wire:model="l1_destination_icao" wire:keydown="setDestinationNameIataValues">

                        @error('l1_destination_icao') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>
                    <div class="col">
                        <label for="destination_dof" class="font-weight-bold text-primary text-uppercase"> IATA: </label>
                        <input type="text" class="form-control @error('l1_destination_iata') is-invalid @enderror" wire:model="l1_destination_iata" wire:keyup="setDestinationNameIcaoValues">
                        @error('l1_destination_iata') <span class="text-danger">{{ $message }}</span> @enderror

                        {{$l1_destination_iata}}
                    </div>
                    <div class="col">
                        <label for="destination_dof" class="font-weight-bold text-primary @error('l1_destination_dof') is-invalid @enderror "> DOF: </label>
                        <input type="date" class="form-control" wire:model="l1_destination_dof">
                        @error('l1_destination_dof') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>

                    <div class="col">
                        <label for="etd" class="font-weight-bold text-primary @error('l1_destination_etd') is-invalid @enderror  "> ETA: </label>
                        <input type="time" class="form-control" wire:model="l1_destination_etd">
                        @error('l1_destination_etd') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="form-check float-right bg-outline-light  ">
                <label class="form-check-label btn btn-light text-info font-weight-bold" for="return-flight">
                    <input class="form-check-input text-info font-weight-bold" type="checkbox" value="" id="return-flight" wire:change="toggleHasReturn">
                    Add a return leg to this flight </label>
            </div>
        </div>

        <!--end of Leg 1 section  -->

        <!-- leg 2 section  -->
        @if($hasReturn)

        <div class="mt-4  card p-2">
            <h3 class="text-info font-weight-bolder ">Return Details :</h3>

            <div class="alert">

                <div class="form-row">
                    <div class="col">
                        <label for="L1nbr" class="font-weight-bold text-primary"> Number: </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text  text-uppercase" wire:model="icao">{{$airline->icao}}</div>
                            </div>

                            <input type=" text" class="form-control" placeholder="" wire:model="L2nbr">
                        </div>
                    </div>

                    <div class="col">
                        <label for="l2-same" class="font-weight-bold text-primary"> Call sign: </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" wire:model="L2callsign">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" id="l2-same" wire:change="setL2Callsign">
                                    Same as flight number
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="alert">
                <div class="form-row">
                    <div class="col">
                        <label for="origin" class="font-weight-bold text-primary"> Origin: </label>
                        <select id="" class="form-control" wire:model="l2_origin_name" wire:change="setL2OriginIcaoIataValues">
                            <option value=""> Select airport</option>
                            @if(isset($airports))
                            @foreach($airports as $airport)
                            <option value="{{$airport->id}}"> {{$airport->name}} </option>
                            @endforeach

                            @endif
                        </select>
                    </div>
                    <div class="col">
                        <label for="origin_dof" class="font-weight-bold text-primary"> ICAO: </label>
                        <input type="text" class="form-control text-uppercase" wire:model="l2_origin_icao" wire:input="setL2OriginNameIataValues">
                    </div>
                    <div class="col">
                        <label for="origin_dof" class="font-weight-bold text-primary"> IATA: </label>
                        <input type="text" class="form-control" wire:model="l2_origin_iata" wire:input="setL2OriginNameIcaoValues">
                    </div>
                    <div class="col">
                        <label for="origin_dof" class="font-weight-bold text-primary"> DOF: </label>
                        <input type="date" class="form-control" wire:model="l2_origin_dof">
                    </div>

                    <div class="col">
                        <label for="etd" class="font-weight-bold text-primary"> ETD: </label>
                        <input type="time" class="form-control" wire:model="l2_origin_etd">
                    </div>

                </div>
            </div>

            <!-- l2_ div  -->
            <div class="alert">
                <div class="form-row">
                    <div class="col">
                        <label for="destination" class="font-weight-bold text-primary"> Destination: </label>
                        <select id="" class="form-control" wire:model="l2_destination_name" wire:change="setL2DestinationIcaoIataValues">
                            <option value=""> Select airport</option>
                            @if(isset($airports))
                            @foreach($airports as $airport)
                            <option value="{{$airport->id}}"> {{$airport->name}} </option>
                            @endforeach

                            @endif
                        </select>
                    </div>
                    <div class="col">
                        <label for="destination_dof" class="font-weight-bold text-primary"> ICAO: </label>
                        <input type="text" class="form-control text-uppercase" wire:model="l2_destination_icao" wire:input="setL2DestinationNameIataValues">
                    </div>
                    <div class="col">
                        <label for="destination_dof" class="font-weight-bold text-primary"> IATA: </label>
                        <input type="text" class="form-control text-uppercase" wire:model="l2_destination_iata" wire:input="setL2DestinationNameIcaoValues">
                    </div>
                    <div class="col">
                        <label for="destination_dof" class="font-weight-bold text-primary"> DOF: </label>
                        <input type="date" class="form-control text-uppercase" wire:model="l2_destination_dof">
                    </div>

                    <div class="col">
                        <label for="etd" class="font-weight-bold text-primary"> ETA: </label>
                        <input type="time" id="" class="form-control" wire:model="l2_destination_etd">
                    </div>
                </div>
            </div>

        </div>

        @endif
        <div class="alert">
            <button type=submit class="btn btn-info float-right">Save and Continue</button>
            <a href="{{ URL::previous() }}" class="btn btn-outline-info float-left">Back</a>
        </div>

    </form>
</div>
