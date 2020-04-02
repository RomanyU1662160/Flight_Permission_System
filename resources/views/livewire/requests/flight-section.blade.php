<div>

    <form action=" ">
        <div class="mt-4 card p-2">
            <h3 class="text-info font-weight-bolder ">Flight Details :</h3>
            <div class="alert">

                <div class="form-row">
                    <div class="col">
                        <label for="nbr" class="font-weight-bold text-primary"> Flight Number: </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text  text-uppercase" wire:model="icao">{{$airline->icao}}</div>
                            </div>

                            <input type=" text" class="form-control" placeholder=" ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert">
                <div class="form-row">
                    <div class="col">
                        <label for="origin" class="font-weight-bold text-primary"> Origin: </label>
                        <select name="origin" id="" class="form-control">
                            <option value=""> Select airport</option>
                            @if(isset($airports))
                            @foreach($airports as $airport)
                            <option value="{{$airport->id}}"> {{$airport->name}} </option>
                            @endforeach

                            @endif
                        </select>
                    </div>
                    <div class="col">
                        <label for="origin-dof" class="font-weight-bold text-primary"> DOF: </label>
                        <input type="date" name="origin-dof" id="" class="form-control">
                    </div>

                    <div class="col">
                        <label for="etd" class="font-weight-bold text-primary"> ETD: </label>
                        <input type="time" name="etd" id="" class="form-control">
                    </div>

                    </fieldset>

                </div>
            </div>

            <div class="alert">
                <div class="form-check float-right bg-info">
                    <label class="form-check-label btn btn-info" for="return-flight">
                        <input class="form-check-input" type="checkbox" value="" id="return-flight" name="return-flight" wire:change="toggleHasReturn">

                        Add a return leg to this flight </label>
                </div>
            </div>

        </div>
        @if($hasReturn)
        <div class="mt-4  card p-2">
            <h3 class="text-info font-weight-bolder ">Return Details :</h3>

            <div class="alert ">

                <div class="form-row">
                    <div class="col">
                        <label for="origin" class="font-weight-bold text-primary"> Destination : </label>
                        <select name="origin" id="" class="form-control">
                            <option value=""> Select airport</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="origin-dof" class="font-weight-bold text-primary"> DOF: </label>
                        <input type="date" name="dest-dof" id="" class="form-control">
                    </div>

                    <div class="col">
                        <label for="eta " class="font-weight-bold text-primary"> ETA: </label>
                        <input type="time" name="eta" id="" class="form-control">
                    </div>



                </div>
            </div>
        </div>

        @endif
    </form>
</div>
