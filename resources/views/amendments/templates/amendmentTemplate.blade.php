<div class="card mt-2">
    <div class="card-header ">
        <div class="row">
            <div class="col-md-10">
                <h4 class="card-title  float-left">Amendment: {{$amendment->ref}} </h4>
            </div>
            >
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <table class="table table-hover">

                <tr class="border">
                    <td> <strong>Submitted by : </strong> {{$amendment->requester->getFullName()}} - ( {{$amendment->requester->getCompany()->name}} )</td>

                    <td class="border-left">

                        <strong> Last Update: </strong>
                        {{$amendment->updated_at->format('D d-m-Y')}}
                        ({{$amendment->updated_at->diffForHumans()}})
                    </td>


                </tr>
            </table>


        </div>

    </div>

    <div class="card-footer">
        <a href="{{route('requests.show', $amendment)}}" class="btn btn-outline-info float-right">view details <i class=" ml-2 fas fa-angle-double-right"></i> </a>
    </div>
</div>
