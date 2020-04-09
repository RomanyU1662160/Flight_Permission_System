<div class="row">

    <div class="col-md-12  card">

        <h3 class="text-center text-info card-title"> Flight details </h3>

        <livewire:flight-block :flight="$flight" :key="$flight->id">
    </div>

</div>
@if(isset($leg))
<div class="row mt-4">
    <div class="col-md-12  card">

        <h3 class="text-center text-info card-title"> Return Flight </h3>

        <livewire:flight-block :flight="$leg" :key="$leg->id">
    </div>

</div>

@endif
<div class="row mt-4">

    <div class="col-md-5  card ">
        <div class="alert">
            <h3 class="text-center text-info"> Submission details </h3>
        </div>
        @include('submissions.templates.submissionTemplate')
    </div>



    @if(isset($permission))

    <div class="col-md-7  card">
        <div class="alert">
            <h3 class="text-center text-info card-title"> Permission details
        </div>
        </h3>
        @include('permissions.templates.permissionTemplate')
    </div>
    @endif
</div>
