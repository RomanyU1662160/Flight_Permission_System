<div>
    {{$flights->links()}}

    @foreach($flights as $flight)

    <livewire:flight-block :flight="$flight" :key="$flight->id">

        @endforeach

</div>
