<div>
    <h3 class="text-info text-center"> Submitted Requests </h3>
    <div class="container">
        {{$permissions->links()}}
        @foreach($permissions as $permission)

        <livewire:permission-block :permission="$permission" :key="$permission->id">

            @endforeach
    </div>



</div>
