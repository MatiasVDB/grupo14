{{>header}}

{{#viaje}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Actualización de Viaje</h5>

    <h6> Viaje: {{id}}</h6>


<form class="col-md-8 formulario" action="../procesarActualizacionViaje" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="hidden" name="id" value="{{id}}">

            <label for="inputOrigen" >Origen</label>
            <input name="origen" type="text" id="inputOrigen" class="form-control" placeholder="Origen" value="{{origen}}" required>
        </div>

        <div class="form-group col-md-6">
            <label for="inputDestino" >Destino</label>
            <input type="text" name="destino" id="inputDestino" class="form-control" placeholder="Destino" value="{{destino}}" required>
        </div>


    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fechaInicio" >Fecha de inicio</label>
            <input type="date" name="fechaInicio" id="fechaInicio" class="form-control"  value="{{fechaInicio}}">
        </div>


        <div class="form-group col-md-6">
            <label for="fechaFinalizacion" >Fecha de finalizacion</label>
            <input type="date" name="fechaFinalizacion" id="fechaFinalizacion" class="form-control"  value="{{fechaFinalizacion}}">
        </div>

    </div>



    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="ETA" >ETA</label>
            <input type="date" name="ETA" id="ETA" class="form-control"  value="{{ETA}}">
        </div>

        <div class="form-group col-md-6">
            <label for="fechaCarga" >ETD</label>
            <input type="date" name="ETD" id="ETD" class="form-control"  value="{{ETD}}">
        </div>


    </div>
        <div>

            <label> <h6> Vehículo</h6></label>
            <select class="custom-select" multiple name="idVehiculo">
                <option value="{{idVehiculo}}" selected>ID: {{idVehiculo}}</option>
                {{#tractores}}
                <option value="{{id}}">ID: {{id}} - Patente: {{patente}} - Numero de chasis: {{numeroDeChasis}} - Modelo: {{modelo}}</option>

                {{/tractores}}
            </select>

        </div>

        <div>

            <label> <h6> Arrastrado</h6></label>
            <select class="custom-select mb-4" multiple name="idArrastrado">
                <option value="{{idArrastrado}}" selected>ID: {{idArrastrado}}</option>
                {{#arrastrados}}
                <option value="{{id}}">ID: {{id}} - Patente: {{patente}} - Numero de chasis: {{numeroDeChasis}} </option>

                {{/arrastrados}}
            </select>

        </div>

    <label> <h6> Cargas de combustible</h6></label>
    {{#cargas}}
    <div class="form-row mb-4">
        <div class="form-group col-md-4">
            <label for="inputOrigen" >Id</label>
            <input name="cantidadCargada" type="text" id="id" class="form-control" placeholder="Cantidad cargada" value="{{id}}" disabled>
        </div>



        <div class="form-group col-md-4">
            <input type="hidden" name="id" value="{{id}}">

            <label for="inputOrigen" >Cantidad cargada</label>
            <input name="cantidadCargada" type="text" id="inputCantidadCargada" class="form-control" placeholder="Cantidad cargada" value="{{cantidad}}" disabled>
        </div>

        <div class="form-group col-md-4">
            <label for="inputDestino" >Importe</label>
            <input type="text" name="importe" id="inputImporte" class="form-control" placeholder="Importe" value="${{importe}}" disabled>
        </div>
    </div>

    <div class="form-row mb-4">

        <div class="form-group col-md-6">
            <label for="inputDestino" >Lugar</label>
            <input type="text" name="importe" id="lugar" class="form-control" placeholder="Lugar" value="{{lugar}}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="inputDestino" >Kilometros recorridos</label>
            <input type="text" name="importe" id="kmRecorridos" class="form-control" placeholder="Kilometros recorridos" value="{{kilometrosRecorridos}}" disabled>
        </div>
    </div>
    {{/cargas}}

    {{^cargas}}
    <label> <h6> Este viaje no tiene cargas de combustible registradas.</h6></label>

    {{/cargas}}
    <button class="btn btn-primary" id="aplicarRegistro" type="submit">Actualizar</button>
</form>

</div>

</main>

{{/viaje}}

{{> footer}}