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

    <div class="form-group col-md-12">

    <label> <h6> Vehículo</h6></label>
    <select class="custom-select" multiple name="idVehiculo">
        <option selected>VEHICULOS</option>
        {{#tractores}}
        <option value="{{id}}">ID: {{id}} - Patente: {{patente}} - Numero de chasis: {{numeroDeChasis}} - Modelo: {{modelo}}</option>

        {{/tractores}}
    </select>


</div>
    </div>


    <div class="form-row">

    <div class="form-group col-md-8">

        <label> <h6> Cliente</h6></label>
        <select class="custom-select" multiple name="cuit">
            <option selected>CLIENTES</option>
            {{#clientes}}
            <option value="{{CUIT}}">CUIT: {{CUIT}} - Denominación: {{denominacion}}</option>

            {{/clientes}}
        </select>

    </div>

    </div>


    <div class="form-row">
        <label> <h6> Chofer</h6></label>
        <select class="custom-select" multiple name="dniChofer">
            <option selected>CHOFERES</option>
            {{#choferes}}
            <option value="{{numeroDeDocumento}}">Tipo de documento: {{tipoDeDocumento}} - Numero de documento: {{numeroDeDocumento}} - Nombre: {{nombre}}</option>

            {{/choferes}}
        </select>

    </div>

    <br>

    <button class="btn btn-primary" id="aplicarRegistro" type="Registrar">Registrar</button>
</form>

</div>

</main>

{{> footer}}