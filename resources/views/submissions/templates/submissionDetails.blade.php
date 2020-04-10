  <div class="alert bg-secondary">
      <h2 class="text-warning text-center">
          Reference: {{$submission->ref}}
      </h2>
  </div>

  <div class="row">

      <div class="col-md-4 card border">
          <h3 class="text-center"> Submission details</h3>

          <table class="table table-hover  table-responsive-md">
              <tr>
                  <th> State : </th>
                  <td class=""> <span class="badge p-2 {{$submission->isApproved() ? 'badge-success' : 'badge-warning'}}"> {{$submission->isApproved() ? "Fully approved" : $submission->state->name}}</span> </td>
                  <td class=""> </td>
              </tr>

              <tr>
                  <th> Submitted by: </th>
                  <td>{{$submission->requester->fname}} </td>

                  <th> Agent : </th>
                  <td>{{$submission->requester->getCompany()->name}} </td>
              </tr>
              <tr>
                  <th> Submitted on: </th>
                  <td>{{$submission->created_at->format('D d-m-y')}} </td>

                  <th> </th>
                  <td>{{$submission->created_at->diffForHumans()}} </td>
              </tr>

          </table>
          @if(isset($submission->info))
          <div class="card mt-2">
              <h3 class="text-info text-center">Info </h3>
              <p>
                  {{$submission->info}}
              </p>
          </div>
          @endif

      </div>

      <div class="col-md-8 ">
          <div class="row">
              <div class="col-md-10">
                  <h3 class="text-info text-center"> Flights </h3>
              </div>
              <div class="col-md-2">
                  <span class="badge badge-info p-3 float-right"> {{$submission->flights->count()}} flight/s </span>
              </div>
          </div>

          @foreach($submission->flights as $flight)

          @include('flights.templates.flightTemplate')
          @endforeach

      </div>

  </div>
