{{>header}}

<form class="col-md-8 align-middle" action="./registrarViaje" method="post">
    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Registrar Viaje</h1>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputOrigen" >Origen</label>
            <input name="origen" type="text" id="inputOrigen" class="form-control" placeholder="Origen" required>
        </div>

        <div class="form-group col-md-4">
            <label for="inputDestino" >Destino</label>
            <input type="text" name="destino" id="inputDestino" class="form-control" placeholder="Destino"  required>
        </div>

        <div class="form-group col-md-4">
            <label for="fechaFinalizacion" >Fecha de finalizacion</label>
            <input type="date" name="fechaFinalizacion" id="fechaFinalizacion" class="form-control" ">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="fechaInicio" >Fecha de inicio</label>
            <input type="date" name="fechaInicio" id="fechaInicio" class="form-control"  ">
        </div>

        <div class="form-group col-md-4">
            <label for="fechaCarga" >Fecha de carga</label>
            <input type="date" name="fechaCarga" id="fechaCarga" class="form-control" ">
        </div>

        <div class="form-group col-md-4">
            <label for="tiempoReal" id="contacto1">Tiempo real</label>
            <input name="tiempoReal" class="form-control" type="number" id="tiempoReal">
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



    <div>

    <label> <h6> Vehículo</h6></label>
    <select class="custom-select" multiple name="idVehiculo">
        <option selected>VEHICULOS</option>
        {{#tractores}}
        <option value="{{id}}">ID: {{id}} - Patente: {{patente}} - Numero de chasis: {{numeroDeChasis}} - Modelo: {{modelo}}</option>

        {{/tractores}}
    </select>

    </div>

    <div>

    <label> <h6> Arrastrado</h6></label>
    <select class="custom-select" multiple name="idArrastrado">
        <option selected>ARRASTRADOS</option>
        {{#arrastrados}}
        <option value="{{id}}">ID: {{id}} - Patente: {{patente}} - Numero de chasis: {{numeroDeChasis}} - Tipo de carga: {{tipoCarga}}</option>

        {{/arrastrados}}
    </select>

    </div>

    <div>

        <label> <h6> Cliente</h6></label>
        <select class="custom-select" multiple name="cuit">
            <option selected>CLIENTES</option>
            {{#clientes}}
            <option value="{{CUIT}}">CUIT: {{CUIT}} - Denominación: {{denominacion}}</option>

            {{/clientes}}
        </select>

    </div>

    <div>

        <label> <h6> Chofer</h6></label>
        <select class="custom-select" multiple name="dniChofer">
            <option selected>CHOFERES</option>
            {{#choferes}}
            <option value="{{numeroDeDocumento}}">Tipo de documento: {{tipoDeDocumento}} - Numero de documento: {{numeroDeDocumento}} - Nombre: {{nombre}}</option>

            {{/choferes}}
        </select>

    </div>

    <button class="btn btn-lg btn-primary btn-block" id="aplicarRegistro" type="Registrar">Registrar</button>
</form>
</main>

{{> footer}}