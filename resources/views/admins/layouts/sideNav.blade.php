<div class="row  card">
    <ul class="nav flex-column nav-pills text-center">
        <li class="nav-item bg-info text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Admin options </h3>
        </li>
</div>
<div class="row mt-3 card ">
    <ul class="nav flex-column nav-pills text-center ">
        <li class="nav-item bg-secondary text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Users</h3>
        </li>
        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('*/admin/allusers')? ' bg-info text-warning  ' : ' '}} " href="{{route('admin.allUsers')}}">All users</a>
            </li>
        </div>

        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('admin/dashboard/newUser')? ' bg-info text-warning  ' : ' '}} " href="{{route('admin.dashboard.newUser')}}">Add new user</a>
            </li>
        </div>
        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('admin/dashboard/newCAA')? ' bg-info text-warning  ' : ' '}} " href="{{route('admin.dash.newUser.CAA')}}">Add new CAA officer</a>
            </li>
        </div>
        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('admin/dashboard/newAirliner')? ' bg-info text-warning  ' : ' '}} " href="{{route('admin.dash.newUser.Airliner')}}">Add new Airliner</a>
            </li>
        </div>
        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('admin/dashboard/new/agentOfficer')? ' bg-info text-warning  ' : ' '}} " href="{{route('admin.dash.newUser.Agent')}}">Add new Agent officer</a>
            </li>
        </div>
    </ul>
</div>

<div class="row mt-3 card">
    <ul class="nav flex-column nav-pills text-center ">
        <li class="nav-item bg-secondary text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Agents </h3>
        </li>
        <div class="col-md-10 offset-md-1">
            <li class=" nav-item border-bottom ">
                <a class=" nav-link text-info {{request()->is('admin/admin/newAgent')? ' bg-info text-warning  ' : ' '}}" href="{{route('admin.newAgent')}}"> Add New Agent </a>
            </li>


        </div>
    </ul>
</div>

<div class="row mt-3 card">
    <ul class="nav flex-column nav-pills text-center ">
        <li class="nav-item bg-secondary text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Airlines </h3>
        </li>
        <div class="col-md-10 offset-md-1">
            <li class=" nav-item border-bottom ">
                <a class=" nav-link text-info {{request()->is('/admin/airlines/all')? ' bg-info text-warning  ' : ' '}}" href="{{route('admin.airlines.all')}}"> All Airlines </a>
            </li>
            <li class=" nav-item border-bottom ">
                <a class=" nav-link text-info {{request()->is('admin/admin/add/newAirline')? ' bg-info text-warning  ' : ' '}}" href="{{route('admin.new.airline')}}"> Add New Airline </a>
            </li>


        </div>
    </ul>
</div>
