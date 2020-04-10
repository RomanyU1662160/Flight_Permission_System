<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="flight{{$flight->id}}" tabindex="-1" role="dialog" aria-labelledby="flight{{$flight->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="flight{{$flight->id}}"> {{$flight->submission->ref}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <tr>
                        <th> Call sign : </th>
                        <td> {{$flight->callsign}}</td>

                        <th> Purpose : </th>
                        <td>
                            @foreach($flight->purposes as $purpose)
                            {{$purpose->name}} flight
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th> From : </th>
                        <td> {{$flight->origin->name}}</td>
                        <th>DOF</th>
                        <td> {{$flight->origin_dof->format('d-M-Y')}} </td>
                    </tr>
                    <tr>
                        <th> To : </th>
                        <td> {{$flight->destination->name}} </td>
                        <th>DOF</th>
                        <td> {{$flight->destination_dof->format('d-M-Y')}} </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer ">


                @if( $flight->state_id !==1)
                <a href="{{route('flights.approve', $flight)}}" class="ml-2 btn btn-outline-success float-right">Approve <i class="fas fa-thumbs-up text-success"></i> </a>
                @endif

                @if( $flight->state_id !==2)
                <a href="{{route('flights.underReview', $flight)}}" class="ml-2 btn bg-secondary btn-outline-warning float-right"> Under review <i class="far fa-question-circle text-warning"></i> </a>
                @endif

                @if( $flight->state_id !==3)
                <a href="{{route('flights.pend', $flight)}}" class="ml-2 btn btn-outline-danger float-right"> Pending <i class="fas fa-hourglass-end text-danger"></i></i> </a>
                @endif

                @if( $flight->state_id !==4)
                <a href="{{route('flights.reject', $flight)}}" class="ml-2 btn btn-outline-danger float-right"> Reject <i class="fas fa-thumbs-down text-danger"></i> </a>
                @endif


            </div>
        </div>
    </div>
</div>
