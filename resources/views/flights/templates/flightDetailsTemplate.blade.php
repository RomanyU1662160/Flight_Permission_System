 <div class="row">
     <div class="col-md-6  card">
         <h3 class="text-center text-info card-title font-weight-bold"> Flight Details </h3>
         <livewire:flight-block :flight="$flight" :key="$flight->id">
     </div>


     @if(isset($leg))

     <div class="col-md-6  card">

         <h3 class="text-center text-info card-title font-weight-bold"> Return Flight </h3>

         <livewire:flight-block :flight="$leg" :key="$leg->id">
     </div>

     @endif
 </div>

 <div class="row mt-4">

     <div class="col-md-6  card ">
         <div class="alert">
             <h3 class="text-center text-info font-weight-bold"> Submission details </h3>
         </div>
         @include('submissions.templates.submissionTemplate')
     </div>



     @if(isset($permission))

     <div class="col-md-6  card">
         <div class="alert">
             <h3 class="text-center text-info card-title font-weight-bold"> Permission details
         </div>
         </h3>
         @include('permissions.templates.permissionTemplate')
     </div>
     @endif
 </div>
