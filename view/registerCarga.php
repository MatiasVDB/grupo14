{{> header}}
<form action="./registrarCarga" class="form-signin col-md-8 align-middle" method="post">

    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Registro de Cargas</h1>


    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="id" >Id</label>
            <input name="id" type="text" id="id" class="form-control" placeholder="id" required>
        </div>

        <div class="form-group col-md-4">
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

        <div class="form-group col-md-4">
            <label for="inputPeso" >Peso neto</label>
            <input type="number" name="pesoNeto" id="inputPeso" class="form-control" placeholder="Peso neto" required>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputHazard" >Hazard</label>
            <select class="form-control category-select" id="inputHazard" name="hazard">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="form-group col-md-4">

            <label for="imoClass">IMO Class</label>


            <input name="imoClass" class="form-control" type="number"
                   id="imoClass">

        </div>

        <div class="form-group col-md-4">

            <label for="imoSclass">IMO SubClass</label>


            <input name="imoSclass" class="form-control" type="number"
                   id="imoSclass">

        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputReefer" >Reefer</label>
            <select class="form-control category-select" id="inputReefer" name="reefer">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="form-group col-md-4">

            <label for="temperatura">Temperatura</label>


            <input name="temperatura" class="form-control" type="number"
                   id="temperatura">

        </div>


    </div>
    <button class="btn btn-lg btn-primary btn-block" id="aplicarRegistro" type="submit">Registrar</button>

</form>

