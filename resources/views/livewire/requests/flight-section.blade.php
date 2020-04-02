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

        </div>
    </form>
</div>
