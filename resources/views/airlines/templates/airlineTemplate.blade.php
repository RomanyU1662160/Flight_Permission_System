<div class="card mt-2 ">

    <div class="card-header bg-secondary">
        <h3 class="card-title">
            <span class="float-left text-warning"> {{$airline->name}} </span>
            <span class="float-right text-warning"> {{$airline->country->name}} </span>
        </h3>
    </div>

    <div class="card-body">
        <table class=" table table-hover  table-sm ">
            <tr class="col-md-6">
                <th> ICAO: </th>
                <td> {{$airline->icao}}</td>
                <th> IATA: </th>
                <td> {{$airline->IATA}}</td>
            </tr>

            <tr class="col-md-6">
                <th> Company: </th>
                <td> {{$airline->name}} </td>
                <th> Agent: </th>
                <td>
                    @if(!$airline->agent)
                    <span> {{$airline->name}}</span>
                    @else
                    <span> {{$airline->agent->name}}</span>
                    @endif
                </td>
            </tr>

        </table>

    </div>

</div>
