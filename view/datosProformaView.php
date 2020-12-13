{{>header}}

<div class="col-12">


</div>

<div class="formularioContainer">

    <h5 class="registerTxt"> Carga de datos de la Proforma</h5>

<form action="proforma/mostrarDatosEnLaProforma" class="formulario" method="post">

    <div class="col-12">

    <label> <h6> Cliente </h6> </label>
    <select class="custom-select mb-4" multiple name="CUIT_cliente">
        <option selected>DENOMINACION</option>


        {{#clientes}}
        <option value="{{CUIT}}"> CUIT: {{CUIT}} / {{denominacion}}</option>

        {{/clientes}}
    </select>



    <label> <h6> Viaje</h6></label>
        <select class="custom-select mb-4" multiple name="id_viaje">
            <option selected>DATOS DEL VIAJE</option>
            {{#viajes}}
            <option value="{{id}}">Codigo: {{id}} - Origen: {{origen}} / Destino:{{destino}} </option>

            {{/viajes}}
        </select>



        <label> <h6>Carga</h6></label>
        <select class="custom-select mb-4" multiple name="id_carga">
            <option selected>DATOS DE LA CARGA</option>
            {{#cargas}}
            <option value="{{id}}"> ID Carga: {{id}} / Tipo: {{tipo}} </option>

            {{/cargas}}
        </select>



            <label> <h6> Chofer </h6></label>
    <select class="custom-select mb-5"  multiple name="numeroDeDocumento_usuario">
        <option selected>SELECCIÓN DE CHOFER</option>

        {{#empleados}}
        <option value="{{numeroDeDocumento}}"  >{{nombre}}({{numeroDeDocumento}}) </option>
        {{/empleados}}

    </select>
            <button type="submit" class="btn btn-primary"> Enviar Datos </button>
        </div>
</form>
</div>

{{>footer}}