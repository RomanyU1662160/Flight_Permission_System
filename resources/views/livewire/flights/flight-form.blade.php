<div class="card m-2 p-2 bg-info ">
    <h3 class="card-title"> Flight details </h3>
    <form action="" method="post">

        <div class="form-row">
            <div class="col">
                <label for=""> Call sign </label>
                <input type="text" class="form-control" value="{{$callsign}}" readonly>
            </div>
            <div class="col">
                <label for="nbr"> Flight number</label>
                <input type="text" class="form-control" name="nbr">
            </div>


        </div>

        <div class="form-row">
            <div class="col">
                <label for="nbr"> Origin </label>
                <select name="airline" id="" class="form-control">
                    <option> Select airport </option>
                    <option> HECA </option>
                    <option> EGGK </option>
                </select>
            </div>
            <div class="col">
                <label for="nbr"> Destination </label>
                <select name="airline" id="" class="form-control">
                    <option> Select airport </option>
                    <option> HECA </option>
                    <option> EGGK </option>
                </select>
            </div>

        </div>




    </form>


</div>
