<div class="card mt-2 ">

    <div class="card-header">
        <h3 class="card-title">
            <span class="float-left"> {{$user->username}} </span>
            <span class="float-right"> {{$user->email}} </span>
        </h3>
    </div>

    <div class="card-body">
        <table class=" table table-hover  table-sm ">
            <tr class="col-md-6">
                <th> Email: </th>
                <td> {{$user->email}}</td>
                <th> User Name: </th>
                <td> {{$user->username}}</td>
            </tr>

            <tr class="col-md-6">
                <th> Company: </th>
                <td> {{$user->getCompany()->name}} </td>
                <th> Roles: </th>
                <td>
                    @if($user->roles->count())
                    @foreach($user->roles as $role)
                    <span class="text-info"> | {{$role->name}} </span>
                    @endforeach
                    @else
                    <span> No roles defined for this user </span>
                    @endif
                </td>
            </tr>

        </table>

    </div>

    <div class="card-footer">
        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#update{{$user->id}}">
            Update Role
        </button>
    </div>
    @include('modals.UpdateRolesModal')
</div>
