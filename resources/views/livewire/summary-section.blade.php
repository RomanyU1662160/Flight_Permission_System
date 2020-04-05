<div class=" card bg-info ">
    <h3 class="card-title text-center p-2"> Request summary </h3>
</div>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">

            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h3 class="mb-0"> Airline details <i class="fas fa-chevron-down"></i> </h3>
            </button>


        </div>

        <div id="collapseOne" class="collapse {{session('airline')? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                @if(Session::has('airline'))
                <table class="table table-borderless table-hover">
                    <tr>
                        <th>Name:</th>
                        <td class="border-right">{{session('airline.name') }} </td>
                        <th>ICAO:</th>
                        <td> {{session('airline.icao') }} </td>
                    </tr>
                    <tr>
                        <th>IATA:</th>
                        <td class="border-right">{{session('airline.iata') }} </td>
                        <th>Country:</th>
                        <td> {{session('airline.country.name') }} </td>
                    </tr>
                </table>
                @else
                <p class="text-danger "> Please fill the airline details section
                    <a href="{{route('requests.new.step1')}}" class="btn btn-link"> airline section </a>
                </p>
                @endif


            </div>
        </div>
    </div>
    <!-- accordion2 -->
    <div class="card">
        <div class="card-header" id="headingTwo">

            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h3 class="mb-0"> Flight details <i class="fas fa-chevron-down"></i> </h3>

            </button>

        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                @if(Session::has('leg1'))
                <table class="table table-borderless table-hover">
                    <thead>Leg 1</thead>
                    <tr>
                        <th>Callsign:</th>
                        <td class="border-right">{{session('leg1.callsign') }} </td>
                        <th>DOF:</th>
                        <td> {{session('leg1.origin_dof')->format('D d-m-y') }} </td>
                    </tr>
                    <tr>
                        <th>From:</th>
                        <td class="border-right">{{session('leg1.origin.name') }} </td>
                        <th>To :</th>
                        <td> {{session('leg1.destination.name') }} </td>
                    </tr>
                </table>
                @else
                <p class="text-danger "> Please fill the flight details section
                    <a href="{{route('requests.new.step2')}}" class="btn btn-link">Flight section </a>
                </p>
                @endif

                @if(Session::has('leg2'))

                <table class="table table-borderless table-hover">
                    <thead>Leg 2</thead>
                    <tr>
                        <th>Callsign:</th>
                        @if(session('leg2.callsign'))
                        <td class="border-right">{{session('leg2.callsign') }} </td>
                        @endif
                        <th>DOF:</th>
                        <td>
                            @if(session('leg2.origin_dof'))
                            {{session('leg2.origin_dof')->format('D d-m-y') }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>From:</th>
                        <td class="border-right">{{session('leg2.origin.name') }} </td>
                        <th>To :</th>
                        <td> {{session('leg2.destination.name') }} </td>
                    </tr>


                </table>

                @endif


            </div>
        </div>
    </div>

    <!-- accordion3 -->
    <div class="card">
        <div class="card-header" id="headingThree">

            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h3 class="mb-0"> Route details <i class="fas fa-chevron-down float-right"></i> </h3>
            </button>

        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>name:</th>
                        <td>airline name </td>
                        <th>ICAO:</th>
                        <td> icao </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header" id="headingFour">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h3 class="mb-0"> Schedule details <i class="fas fa-chevron-down"></i> </h3>
                </button>
            </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>name:</th>
                        <td>airline name </td>
                        <th>ICAO:</th>
                        <td> icao </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
