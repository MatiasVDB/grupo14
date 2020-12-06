{{>header}}

{{#viaje}}

<form class="col-md-8 align-middle" action="../procesarActualizacionViaje" method="post">
    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Actualización de Viaje</h1>


    <h6> Viaje: {{id}}</h6>
    <div class="form-row">
        <div class="form-group col-md-4">
            <input type="hidden" name="id" value="{{id}}">

            <label for="inputOrigen" >Origen</label>
            <input name="origen" type="text" id="inputOrigen" class="form-control" placeholder="Origen" value="{{origen}}" required>
        </div>

        <div class="form-group col-md-4">
            <label for="inputDestino" >Destino</label>
            <input type="text" name="destino" id="inputDestino" class="form-control" placeholder="Destino" value="{{destino}}" required>
        </div>

        <div class="form-group col-md-4">
            <label for="fechaFinalizacion" >Fecha de finalizacion</label>
            <input type="date" name="fechaFinalizacion" id="fechaFinalizacion" class="form-control"  value="{{fechaFinalizacion}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="fechaInicio" >Fecha de inicio</label>
            <input type="date" name="fechaInicio" id="fechaInicio" class="form-control"  value="{{fechaInicio}}">
        </div>

        <div class="form-group col-md-4">
            <label for="fechaCarga" >Fecha de carga</label>
            <input type="date" name="fechaCarga" id="fechaCarga" class="form-control"  value="{{fechaCarga}}">
        </div>

        <div class="form-group col-md-4">
            <label for="tiempoReal" id="contacto1">Tiempo real</label>
            <input name="tiempoReal" class="form-control" type="number" value="{{tiempoReal}}" id="tiempoReal">
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="ETA" >ETA</label>
            <input type="date" name="ETA" id="ETA" class="form-control"  value="{{ETA}}">
        </div>

        <div class="form-group col-md-4">
            <label for="fechaCarga" >ETD</label>
            <input type="date" name="ETD" id="ETD" class="form-control"  value="{{ETD}}">
        </div>

        <div class="form-group col-md-4">
            <label for="kilometrosFinal" id="direccion">Kilometros final</label>
            <input name="kilometrosFinal" class="form-control" type="number" value="{{kilometrosFinal}}" id="kilometrosFinal">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="kilometrosActuales" id="direccion">Kilometros actuales</label>
            <input name="kilometrosActuales" class="form-control" type="number" value="{{kilometrosActuales}}" id="kilometrosActuales">
        </div>

        <div class="form-group col-md-4">
            <label for="combustibleFinal" id="direccion">Combustible final</label>
            <input name="combustibleFinal" class="form-control" type="number" value="{{combustibleFinal}}" id="combustibleFinal">
        </div>

        <div class="form-group col-md-4">
            <label for="combustibleConsumido" id="direccion">Combustible consumido</label>
            <input name="combustibleConsumido" class="form-control" type="number" value="{{combustibleConsumido}}" id="combustibleConsumido">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="patenteVehiculo">Patente vehiculo</label>
            <select class="custom-select" size="3" name="patenteVehiculo">
                <option selected value="{{patenteVehiculo}}">{{patenteVehiculo}}</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="chasisVehiculo">Chasis vehiculo</label>
            <select class="custom-select" size="3" name="chasisVehiculo">
                <option selected value="{{chasisVehiculo}}">{{chasisVehiculo}}</option>
            </select>
        </div>
    </div>
    <button class="btn btn-lg btn-primary btn-block" id="aplicarRegistro" type="submit">Actualizar</button>
</form>
</main>

{{/viaje}}

{{> footer}}