<div class="card mt-2">
    <div class="card-header ">
        <div class="row">
            <div class="col-md-8">
                <h4 class="card-title  float-left">Reference: {{$permission->ref}} </h4>
            </div>
            <div class="col-md-4">
                <span class="card-title float-right p-1  {{$permission->applyStyle() }}"> {{ucfirst($permission->state->name)}} </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <table class="table table-hover">
                <tr class="border">
                    <th> Approved by : </th>
                    <td>
                        {{ $permission->approver->getFullName() }}

                    </td>
                    <th> Approved On : </th>
                    <td>
                        {{ $permission->created_at->format('D d-M-Y') }}
                        <small> {{$permission->created_at->diffForHumans()}} </small>
                    </td>
                </tr>


            </table>


        </div>

    </div>

    <div class="card-footer">
        <a href="{{route('permissions.show', $permission)}}" class="btn btn-outline-info float-right">view details <i class=" ml-2 fas fa-angle-double-right"></i> </a>
    </div>
</div>
