{{> header}}
<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Registro de Cargas</h5>

<form action="registrarCarga" class="col-md-8 formulario" method="post">

<!--
    <div class="form-row">
        <div class="form-group col-md-3">

            <label for="inputPeso" >Identificación</label>

            <input type="number" name="id" id="id" class="form-control" placeholder="ID" required>

            <p class="text-danger"> {{error}} </p>

        </div>

    </div> -->

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputTipo" >Tipo</label>
            <select class="form-control category-select" id="inputTipo" name="tipo">
                <option value="Granel">Granel</option>
                <option value="Liquida">Liquida</option>
                <option value="20"">20"</option>
                <option value="40"">40"</option>
                <option value="Jaula">Jaula</option>
                <option value="CarCarrier">CarCarrier</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="inputPeso" >Peso neto</label>
            <input type="number" name="pesoNeto" id="inputPeso" class="form-control" placeholder="Peso neto" required>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputHazard" >Hazard</label>
            <select class="form-control category-select" id="inputHazard" name="hazard">
                <option value="SI">Si</option>
                <option value="NO">No</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="imo" >IMO</label>
            <input type="number" name="imo" id="imo" class="form-control" placeholder="IMO" step="0.01">
        </div>


    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputReefer" >Reefer</label>
            <select class="form-control category-select" id="inputReefer" name="reefer">
                <option value="SI">Si</option>
                <option value="NO">No</option>
            </select>
        </div>

        <div class="form-group col-md-6">

            <label for="temperatura">Temperatura</label>


            <input name="temperatura" class="form-control" type="number"
                   step="0.01" id="temperatura">

        </div>


    </div>
    <button class="btn btn-primary" id="aplicarRegistro" type="submit">Registrar</button>

</form>

</div>

