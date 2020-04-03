<div class="card mt-2">
    <div class="card-header ">
        <div class="row">
            <div class="col-md-6">
                <h3 class="card-title  float-left"> {{$flight->airline->name}} </h3>
            </div>
            <div class="col-md-6">
                <span class=" float-right"> Flight number: {{$flight->nbr}}</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">


            <table class="table table-hover">


                <tr class="border">
                    <th> Airline : </th>
                    <td>{{$flight->airline->name}} </td>
                    <th> DOF: </th>
                    <td class="float-right">{{ $flight->origin_dof->format('D d-m-Y')}} </td>

                </tr>

                <tr class="border">
                    <th> Origin: </th>
                    <td>{{$flight->origin->name}} {{ $flight->origin_dof->format('D d-m-Y')}} {{ $flight->etd->format('H:i')}} </td>

                    <th class=""> Destination: </th>
                    <td class="float-right">{{ $flight->destination->name}}
                        {{ $flight->destination_dof->format('D d-m-Y')}}
                        {{ $flight->eta}}</td>
                </tr>
            </table>


        </div>

    </div>

    <div class="card-footer">
        <a href="" class="btn btn-outline-info float-right">view details <i class=" ml-2 fas fa-angle-double-right"></i> </a>
    </div>
</div>
