<div class="card mt-2">
    <div class="card-header bg-secondary text-warning ">
        <div class="row">
            <div class="col-md-6">
                <h3 class="card-title  float-left"> {{ $flight->getRequester()->name}} - {{$flight->callsign}}

                </h3>
            </div>
            <div class="col-md-6">
                <span class=" float-right">
                    @if($flight->permission)
                    {{ $flight->permission->ref}}
                    @endif
                    <span class="badge p-2 @if($flight->state_id ==2) badge-warning @elseif($flight->state_id ==1)  badge-success  @elseif($flight->state_id ==3 ) bg-danger text-white @else($flight->state_id ==4 ) badge-danger text-white @endif  "> {{$flight->state->name}}</span>
                </span>

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">


            <table class="table table-hover">


                <tr class="border">
                    <th> Airline : </th>
                    <td>{{$flight->airline->name}} </td>
                    <th> Submission: </th>
                    <td class="float-right">

                        @if($flight->submission)

                        <a href="{{route('requests.show', $flight->submission)}}">
                            {{$flight->submission->ref}}
                        </a>
                        <small> ({{$flight->submission->created_at->diffForHumans()}}) </small>
                        @else
                        <p class="text-info"> Not available </p>
                        @endif
                    </td>
                </tr>

                <tr class="border">
                    <th> Origin: </th>
                    <td>{{$flight->origin->name}}
                    </td>

                    <th class=""> Destination: </th>
                    <td class="float-right">{{ $flight->destination->name}}
                    </td>
                </tr>

                <tr class="border">
                    <th> ETD: </th>
                    <td>{{ $flight->origin_dof->format('D d-m-Y')}} {{ $flight->etd->format('H:i')}}
                    </td>

                    <th class=""> ETA: </th>
                    <td class="float-right">
                        {{ $flight->destination_dof->format('D d-m-Y')}}
                        {{ $flight->eta->format('H:i')}}</td>
                </tr>
            </table>


        </div>

    </div>

    <div class="card-footer">
        @if(!request()->is('flights/show/*'))
        <a href="{{route('flights.show', $flight)}}" class="btn btn-outline-info float-right">view details <i class=" ml-2 fas fa-angle-double-right"></i> </a>
        @endif

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#flight{{$flight->id}}">
            CAA options
        </button>

    </div>

</div>
@include('flights.templates.modals.CAAButtonsModal')
