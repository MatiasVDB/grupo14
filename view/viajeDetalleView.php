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

        <div class="form-group col-md-12">
            <label for="fechaCarga" >Fecha de carga</label>
            <input type="date" name="fechaCarga" id="fechaCarga" class="form-control"  value="{{fechaCarga}}">
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
    <!--

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="kilometrosActuales" id="direccion">Kilometros actuales</label>
                <input name="kilometrosActuales" class="form-control" type="number" value="{{kilometrosActuales}}" id="kilometrosActuales">
            </div>


            <div class="form-group col-md-4">
                <label for="kilometrosFinal" id="direccion">Kilometros final</label>
                <input name="kilometrosFinal" class="form-control" type="number" value="{{kilometrosFinal}}" id="kilometrosFinal">
            </div>

        </div>


        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="combustibleConsumido" id="direccion">Combustible consumido</label>
                <input name="combustibleConsumido" class="form-control" type="number" value="{{combustibleConsumido}}" id="combustibleConsumido">
            </div>

            <div class="form-group col-md-4">
                <label for="combustibleFinal" id="direccion">Combustible final</label>
                <input name="combustibleFinal" class="form-control" type="number" value="{{combustibleFinal}}" id="combustibleFinal">
            </div>


        </div>
-->
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
            <select class="custom-select" multiple name="idArrastrado">
                <option value="{{idArrastrado}}" selected>ID: {{idArrastrado}}</option>
                {{#arrastrados}}
                <option value="{{id}}">ID: {{id}} - Patente: {{patente}} - Numero de chasis: {{numeroDeChasis}} - Tipo de carga: {{tipoCarga}}</option>

                {{/arrastrados}}
            </select>

        </div>
    <!--
        <div>

            <label> <h6> Cliente</h6></label>
            <select class="custom-select" multiple name="cuit">
                <option value="{{cuitCliente}}" selected>CUIT: {{cuitCliente}}</option>
                {{#clientes}}
                <option value="{{CUIT}}">CUIT: {{CUIT}} - Denominación: {{denominacion}}</option>

                {{/clientes}}
            </select>

        </div>

        <div>

            <label> <h6> Chofer</h6></label>
            <select class="custom-select" multiple name="dniChofer">
                <option value="{{numeroDeDocumentoChofer}}" selected>{{tipoDocumentoChofer}} - {{numeroDeDocumentoChofer}}</option>
                {{#choferes}}
                <option value="{{numeroDeDocumento}}">Tipo de documento: {{tipoDeDocumento}} - Numero de documento: {{numeroDeDocumento}} - Nombre: {{nombre}}</option>

                {{/choferes}}
            </select>

        </div>
        -->
    <button class="btn btn-primary" id="aplicarRegistro" type="submit">Actualizar</button>
</form>

</div>

</main>

{{/viaje}}

{{> footer}}