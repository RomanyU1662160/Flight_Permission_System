<div>
    <form wire:submit.prevent="submit">

        <div class="mt-4 border card p-2">
            <h3 class="text-info font-weight-bolder ">Flight Purpose:</h3>
            <div class="alert">
                <div class="form-row">
                    <div class="col">


                        <label for="purpose" class="font-weight-bold text-primary"> Flight purpose : </label>
                        <select class="form-control" id="purpose" wire:model="selected" wire:change="$emit('purposeSelected')">
                            <option value=""> Select Flight purpose </option>
                            @foreach($purposes as $purpose)
                            <option value="{{$purpose->id}}">{{ucfirst($purpose->name)}}</option>
                            @endforeach
                        </select>
                        @error('purposes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>


                </div>
            </div>

        </div>
        <div class="alert">
            <button type=submit class="btn btn-info float-right"> Continue</button>
        </div>
    </form>


</div>
