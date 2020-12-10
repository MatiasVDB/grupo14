{{> header}}
{{#carga}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Registro de Cargas</h5>

<form action="../procesarActualizacionCarga" class="col-md-8 formulario" method="post">

    <div class="form-row">

            <input name="id" type="hidden" id="id" class="form-control" value="{{id}}" >

        <div class="form-group col-md-6">
            <label for="inputTipo" >Tipo</label>
            <select class="form-control category-select" id="inputTipo" name="tipo">
                <option value="{{tipo}}">{{tipo}} (seleccionado)</option>
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
            <input type="number" name="pesoNeto" id="inputPeso" class="form-control" value="{{pesoNeto}}" placeholder="Peso neto" required>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputHazard" >Hazard</label>
            <select class="form-control category-select" id="inputHazard" name="hazard">
                <option value="{{hazard}}">{{hazard}} (seleccionado)</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="form-group col-md-6">

            <label for="imo" >IMO</label>
            <input type="number" name="imo" id="imo" class="form-control" value="{{imo}}" placeholder="IMO">
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputReefer" >Reefer</label>
            <select class="form-control category-select" id="inputReefer" name="reefer">
                <option value="{{reefer}}">{{reefer}} (seleccionado)</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="temperatura">Temperatura</label>

            <input name="temperatura" class="form-control" type="number" value="{{temperatura}}" id="temperatura">
        </div>


    </div>
    <button class="btn btn-primary" id="aplicarRegistro" type="submit">Actualizar</button>

</form>

</div>

{{/carga}}
{{^carga}}
Error carga no encontrada
{{/carga}}
{{> footer}}