<div>
    <form wire:submit.prevent="submit">

        <div class="mt-4 border card p-2">
            <h3 class="text-info font-weight-bolder "> Aircraft Details :</h3>
            <div class="alert">

                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" wire:model="reg">
                    </div>
                </div>
            </div>

        </div>
        <div class="alert">
            <button type=submit class="btn btn-info float-right"> Continue</button>
        </div>
    </form>


</div>
