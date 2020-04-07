<div class="container-fluid">
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

            <div id="collapseOne" class="collapse {{request()->is('*/step1')? 'show' : ' '}}" aria-labelledby="headingOne" data-parent="#accordionExample">
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

                <a href="{{route('requests.new.step1')}}" class="btn btn-link float-right"> edit <i class="far fa-edit"></i> </a>

            </div>
        </div>
        <!-- accordion2 -->
        <div class="card">
            <div class="card-header" id="headingTwo">

                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h3 class="mb-0"> Flight details <i class="fas fa-chevron-down"></i> </h3>
                </button>
            </div>
            <div id="collapseTwo" class="collapse  {{request()->is('*/step2')? 'show' : ' '}} " aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    @if(Session::has('leg1'))
                    <table class="table table-borderless table-hover table-responsive-sm">
                        @if(session::has('leg1'))
                        <thead>
                            <th class="text-info"> Leg 1</th>
                        </thead>
                        <tr>
                            @if(session::has('leg1.callsign'))
                            <th class="bg-info">Callsign:</th>
                            <td class="border-right">{{session('leg1.callsign') }} </td>
                            @endif
                            @if(session::has('leg1.origin.name'))
                            <th class="bg-info">From:</th>
                            <td> {{session('leg1.origin.name') }} </td>
                            @endif
                            @if(session::has('leg1.etd'))
                            <th class="bg-light">ETD:</th>
                            <td> {{session('leg1.etd')->format('H:i') }} </td>
                            @endif
                            @if(session::has('leg1.destination.name'))
                            <th class="bg-info">To:</th>

                            <td> {{session('leg1.destination.name') }} </td>
                            @endif

                            @if(session::has('leg1.eta'))
                            <th class="bg-bg-light">ETA:</th>
                            <td> {{session('leg1.eta')->format('H:i') }} </td>
                            @endif

                            @if(session::has('leg1.origin_dof'))
                            <th class="bg-info">DOF:</th>
                            <td> {{session('leg1.origin_dof')->format('D d-m-y') }} </td>
                            @endif
                            @else
                            <th class="text-warning">Please complete the flight details
                                <a href="{{route('requests.new.step2')}}" class="btn btn-link float-right"> Flight details </a>
                            </th>
                            @endif


                        </tr>
                        @if(Session::has('leg2'))
                        <thead>
                            <th class="text-info"> Leg 2</th>
                        </thead>
                        <tr>
                            <th class="bg-info">Callsign:</th>
                            <td class="border-right">{{session('leg2.callsign') }} </td>
                            <th class="bg-info">From:</th>
                            @if(session::has('leg2.origin.name'))
                            <td> {{session('leg2.origin.name') }} </td>
                            @endif
                            @if(session::has('leg2.etd'))
                            <th class="bg-light">ETD:</th>
                            <td> {{session('leg2.etd')->format('H:i') }} </td>
                            @endif
                            @if(session::has('leg2.destination.name'))
                            <th class="bg-info">To:</th>
                            <td> {{session('leg2.destination.name') }} </td>
                            @endif
                            @if(session::has('leg2.eta'))
                            <th class="bg-light">ETA:</th>
                            <td> {{session('leg1.eta')->format('H:i') }} </td>
                            @endif

                            @if(session::has('leg2.origin_dof'))
                            <th class="bg-info">DOF:</th>
                            <td> {{session('leg2.origin_dof')->format('D d-m-y') }} </td>
                            @endif
                        </tr>
                        @endif
                    </table>
                    <a href="{{route('requests.new.step2')}}" class="btn btn-link float-right"> edit <i class="far fa-edit"></i> </a>
                    @else
                    <p class="text-danger "> Please fill the flight details section
                        <a href="{{route('requests.new.step2')}}" class="btn btn-link">Flight section </a>
                    </p>
                    @endif

                </div>
            </div>
        </div>

        <!-- accordion3 -->
        <div class="card">
            <div class="card-header" id="headingThree">

                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h3 class="mb-0"> Aircraft details <i class="fas fa-chevron-down float-right"></i> </h3>
                </button>

            </div>
            <div id="collapseThree" class="collapse  {{request()->is('*/step3')? 'show' : ' '}}" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    @if(Session::has('aircraft'))
                    <table class="table table-borderless table-hover">
                        <tr>
                            <th>Registration:</th>
                            <td class="border-right">{{session('aircraft')->reg }} </td>
                            <th> Country:</th>
                            <td> {{session('aircraft')->country->name }} </td>
                        </tr>
                        <tr>
                            <th>Type:</th>
                            <td> {{session('aircraft')->type }} </td>
                            <th>Capacity:</th>
                            <td class="border-right">{{session('aircraft.capacity') }} </td>

                        </tr>
                    </table>
                    <a href="{{route('requests.new.step3')}}" class="btn btn-link float-right"> edit <i class="far fa-edit"></i> </a>
                    @else
                    <p class="text-danger "> Please fill the airline details section
                        <a href="{{route('requests.new.step1')}}" class="btn btn-link"> airline section </a>
                    </p>
                    @endif


                </div>
            </div>
            </div.>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h3 class="mb-0"> Schedule details <i class="fas fa-chevron-down"></i> </h3>
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse  {{request()->is('*/step4')? 'show' : ' '}}" aria-labelledby="headingFour" data-parent="#accordionExample">
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
    </div>
