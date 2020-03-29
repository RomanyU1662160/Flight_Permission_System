<div class="card mt-2">
    <div class="card-header ">
        <div class="row">
            <div class="col-md-6">
                <h3 class="card-title  float-left">Reference: {{$permission->ref}} </h3>
            </div>
            <div class="col-md-6">
                <span class="card-title float-right p-2  {{$permission->applyStyle() }}"> {{ucfirst($permission->state->name)}} </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <table class="table table-hover">
                <tr class="border">
                    <td> <strong>Flights : </strong>
                        {{ $permission->flights->count() }}
                        {{ $permission->flights->count() > 1 ? Str::plural('flight') : 'flight'}}
                    </td>
                    <td class="border-left">
                        <strong>Submitted on : </strong>
                        {{$permission->created_at->format('D d-m-Y')}}
                    </td>

                </tr>

                <tr class="border">
                    <td> <strong>Submitted by : </strong> {{$permission->requester->username}} - ( {{$permission->requester->getCompany()}} )</td>

                    <td class="border-left">

                        <strong> Last Update: </strong>
                        {{$permission->updated_at->format('D d-m-Y')}}
                        ({{$permission->updated_at->diffForHumans()}})
                    </td>


                </tr>

                <tr class="border">
                    <td> <strong> Amendments :</strong>
                        @if($permission->hasAmendment())
                        <a href="" class="btn btn-link"> View amendments </a>
                        @else
                        <span> This permission has no amendments </span>
                        @endif
                    </td>
                    <td class="border-left"> <strong> Amendments :</strong>
                        @if($permission->hasAmendment())
                        <a href="" class="btn btn-link"> View amendments </a>
                        @else
                        <span> This permission has no amendments </span>
                        @endif
                    </td>


                </tr>
            </table>


        </div>

    </div>

    <div class="card-footer">
        <a href="#" class="btn btn-outline-info float-right">view details <i class=" ml-2 fas fa-angle-double-right"></i> </a>
    </div>
</div>
