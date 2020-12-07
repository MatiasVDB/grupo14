{{>header}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Registrar Viaje</h5>

<form class="col-md-8 formulario" action="./registrarViaje" method="post">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputOrigen" >Origen</label>
            <input name="origen" type="text" id="inputOrigen" class="form-control" placeholder="Origen" required>
        </div>

        <div class="form-group col-md-4">
            <label for="inputDestino" >Destino</label>
            <input type="text" name="destino" id="inputDestino" class="form-control" placeholder="Destino"  required>
        </div>

    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="fechaInicio" >Fecha de inicio</label>
            <input type="date" name="fechaInicio" id="fechaInicio" class="form-control"  ">
        </div>


        <div class="form-group col-md-4">
            <label for="fechaFinalizacion" >Fecha de finalizacion</label>
            <input type="date" name="fechaFinalizacion" id="fechaFinalizacion" class="form-control" ">
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-8">
            <label for="fechaCarga" >Fecha de carga</label>
            <input type="date" name="fechaCarga" id="fechaCarga" class="form-control" ">
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="ETA" >ETA</label>
            <input type="date" name="ETA" id="ETA" class="form-control" >
        </div>

        <div class="form-group col-md-4">
            <label for="fechaCarga" >ETD</label>
            <input type="date" name="ETD" id="ETD" class="form-control" >
        </div>

    </div>


    <div class="form-row">


        <div class="form-group col-md-4">
            <label for="kilometrosActuales" id="direccion">Kilometros actuales</label>
            <input name="kilometrosActuales" class="form-control" type="number"  id="kilometrosActuales">
        </div>

        <div class="form-group col-md-4">
            <label for="kilometrosFinal" id="direccion">Kilometros final</label>
            <input name="kilometrosFinal" class="form-control" type="number" id="kilometrosFinal">
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="combustibleFinal" id="direccion">Combustible final</label>
            <input name="combustibleFinal" class="form-control" type="number" id="combustibleFinal">
        </div>

        <div class="form-group col-md-4">
            <label for="combustibleConsumido" id="direccion">Combustible consumido</label>
            <input name="combustibleConsumido" class="form-control" type="number" id="combustibleConsumido">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="patenteVehiculo">Patente vehiculo</label>
            <select class="custom-select" size="3" name="patenteVehiculo">
                <option selected value="AA124DC">AA124DC</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="chasisVehiculo">Chasis vehiculo</label>
            <select class="custom-select" size="3" name="chasisVehiculo">
                <option selected value="R69904367">R69904367</option>
            </select>
        </div>
    </div>
    <button class="btn btn-primary" id="aplicarRegistro" type="Registrar">Registrar</button>
</form>

</div>

</main>

{{> footer}}