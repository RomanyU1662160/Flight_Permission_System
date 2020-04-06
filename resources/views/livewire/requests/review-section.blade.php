<div>

    <form wire:submit.prevent="submit">

        <div class="mt-4 border card p-2">
            <div class="alert">
                <button type=submit class="btn btn-info float-right"> Submit Request</button>

                <a href="{{route('requests.new.fresh')}}" class="btn btn-outline-danger"> Reset and start new request</a>
            </div>
    </form>


</div>
