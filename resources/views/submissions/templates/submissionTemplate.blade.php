<div class="card mt-2">
    <div class="card-header ">
        <div class="row">
            <div class="col-md-10">
                <h4 class="card-title  float-left">Reference: {{$submission->ref}} </h4>
            </div>
            <div class="col-md-2">
                <span class="card-title float-right p-1 rounded {{$submission->isApproved() ? 'badge-success' : 'badge-warning'}}">

                    {{$submission->isApproved() ? "Fully approved" : ucfirst( $submission->state->name)}} </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <table class="table table-hover">
                <tr class="border">
                    <td> <strong>Flights : </strong>
                        {{ $submission->flights->count() }}
                        {{ $submission->flights->count() > 1 ? Str::plural('flight') : 'flight'}}
                    </td>
                    <td class="border-left">
                        <strong>Submitted on : </strong>
                        {{$submission->created_at->format('D d-m-Y')}}
                    </td>

                </tr>

                <tr class="border">
                    <td> <strong>Submitted by : </strong> {{$submission->requester->username}} - ( {{$submission->requester->getCompany()->name}} )</td>

                    <td class="border-left">

                        <strong> Last Update: </strong>
                        {{$submission->updated_at->format('D d-m-Y')}}
                        ({{$submission->updated_at->diffForHumans()}})
                    </td>


                </tr>
            </table>


        </div>

    </div>

    <div class="card-footer">
        <a href="{{route('requests.show', $submission)}}" class="btn btn-outline-info float-right">view details <i class=" ml-2 fas fa-angle-double-right"></i> </a>
    </div>
</div>
