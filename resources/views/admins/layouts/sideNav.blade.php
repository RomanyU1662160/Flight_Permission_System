<div class="row  card">
    <ul class="nav flex-column nav-pills text-center">
        <li class="nav-item bg-info text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Admin options </h3>
        </li>
</div>
<div class="row mt-3 card ">
    <ul class="nav flex-column nav-pills text-center ">
        <li class="nav-item bg-secondary text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Update Users</h3>
        </li>
        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('admin/allusers')? ' bg-info text-warning  ' : ' '}} " href="{{route('admin.allUsers')}}">All users</a>
            </li>
            <li class=" nav-item border-bottom ">
                <a class=" nav-link text-info {{request()->is('admin/newProject')? ' bg-info text-warning  ' : ' '}}" href="#"> Update Roles </a>
            </li>

        </div>
    </ul>
</div>

<div class="row mt-3 card">
    <ul class="nav flex-column nav-pills text-center ">
        <li class="nav-item bg-secondary text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Teams </h3>
        </li>
        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('admin/allteams')? ' bg-info text-warning  ' : ' '}} " href="#">All Teams</a>
            </li>


        </div>
    </ul>
</div>
