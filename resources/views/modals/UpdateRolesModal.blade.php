<div class="modal fade" id="update{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-warning">
                <h5 class="modal-title " id="role">Update Roles </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.updateRole', $user)}}" method="post">
                    @csrf
                    <div class="row p-1">

                        @foreach( $roles as $role)
                        <div class="custom-control custom-checkbox col-md-4  border-bottom">
                            <input type="checkbox" class="custom-control-input" id="{{$user->id.$role->id}}" name="{{$role->id}}" value="{{$role->id}}" {{ $user->roles->contains($role) ? " checked " : "" }} />
                            <label class="custom-control-label" for="{{$user->id.$role->id}}">{{$role->name}} </label>
                        </div>
                        @endforeach


                    </div>
                    <div class="mt-2">
                        <button class="btn btn-info float-right" type="">Update Roles </button>
                    </div>

                </form>
                <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
