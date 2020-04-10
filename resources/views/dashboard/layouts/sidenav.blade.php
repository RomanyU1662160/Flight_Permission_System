<div class="row  card">
    <ul class="nav flex-column nav-pills text-center">
        <li class="nav-item bg-info text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Options </h3>
        </li>
    </ul>
</div>

<div class="row mt-3 card ">
    <ul class="nav flex-column nav-pills text-center ">
        <li class="nav-item bg-secondary text-center card-heading  p-2 rounded border">
            <h3 class="text-white "> Submissions </h3>
        </li>
        <div class="col-md-10 offset-md-1">
            <li class="nav-item border-bottom ">
                <a class="nav-link text-info {{request()->is('admin/allprojects')? ' bg-info text-warning  ' : ' '}} " href="">All Submissions</a>
            </li>
            <li class=" nav-item border-bottom ">
                <a class=" nav-link text-info {{request()->is('admin/newProject')? ' bg-info text-warning  ' : ' '}}" href=""> My submission </a>
            </li>
        </div>
    </ul>
</div>
