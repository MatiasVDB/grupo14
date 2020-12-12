{{>header}}

<div class="col-12">


</div>

<div class="formularioContainer">

    <h5 class="registerTxt"> Carga de datos de la Proforma</h5>

<form action="proforma/mostrarDatosEnLaProforma" class="formulario" method="post">

    <div class="col-12">

    <label> <h6> Cliente </h6> </label>
    <select class="custom-select" multiple name="CUIT_cliente">
        <option selected>DENOMINACION</option>


        {{#clientes}}
        <option value="{{CUIT}}"> CUIT: {{CUIT}} / {{denominacion}}</option>

        {{/clientes}}
    </select>

            <br> <br>

    <label> <h6> Viaje</h6></label>
        <select class="custom-select" multiple name="id_viaje">
            <option selected>DATOS DEL VIAJE</option>
            {{#viajes}}
            <option value="{{id}}">Codigo: {{id}} - Origen: {{origen}} / Destino:{{destino}} </option>

            {{/viajes}}
        </select>

        <br> <br>

        <label> <h6>Carga</h6></label>
        <select class="custom-select" multiple name="id_carga">
            <option selected>DATOS DE LA CARGA</option>
            {{#viajes}}
            <option value="{{id_carga}}"> ID Carga: {{id}} / Tipo: {{tipo}} </option>

            {{/viajes}}
        </select>

        <br> <br>

            <label> <h6> Chofer </h6></label>
    <select class="custom-select" multiple name="tipoDeDocumento">
        <option selected>SELECCIÓN DE CHOFER</option>

        {{#empleados}}
        <option>

            {{nombre}}

            <input type="hidden" value="{{numeroDeDocumento}}" name="numeroDeDocumento_usuario">

            <input type="hidden" value="{{tipoDeDocumento}}" name="tipoDeDocumento_usuario">

        </option>

        {{/empleados}}

    </select>


<br> <br>

            <button type="submit" class="btn btn-primary"> Enviar Datos </button>

        </div>
</form>

</div>



{{>footer}}