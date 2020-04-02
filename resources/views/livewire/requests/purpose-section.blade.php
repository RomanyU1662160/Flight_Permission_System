<div>
    <div class="alert">
        <label for="name" class="font-weight-bold text-primary"> Flight purposes </label>

        <div class="row p-2">
            @if(exist($purposes))
            @foreach($purposes as $purpose)
            <div class="custom-control custom-checkbox col-md-6 border-bottom ">
                <input type="checkbox" class="custom-control-input" id="{{$purpose->id}}" name="{{$purpose->id}}" value="{{$purpose->id}}" />
                <label class="custom-control-label" for="{{$purpose->id}}">{{$purpose->name}} </label>
            </div>
            @else
            <p> No available purposes </p>
            @endforeach
        </div>
    </div>
</div>
