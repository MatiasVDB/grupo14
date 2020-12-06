{{>header}}

<div class="col-12">
<h1> Carga de datos de la Proforma</h1>

</div>

<form action="proforma/mostrarDatosEnLaProforma" method="post">

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


            <label> <h6> Carga </h6> </label>
    <select class="custom-select" multiple name="id_carga">
        <option selected>TIPO DE CARGA</option>
        {{#cargas}}
        <option value="{{id}}">{{tipo}}</option>

        {{/cargas}}
    </select>

            <br> <br>

            <label> <h6> Chofer </h6></label>
    <select class="custom-select" multiple>
        <option selected>SELECCIÓN DE CHOFER</option>
        {{#empleados}}

        <option>{{nombre}}

            <input type="hidden" value="{{numeroDeDocumento}}" name="numeroDeDocumento_usuario">

            <input type="hidden" value="{{tipoDeDocumento}}" name="tipoDeDocumento_usuario">

        </option>


        {{/empleados}}
    </select>

<br> <br>

            <button type="submit" class="btn btn-primary"> Enviar Datos </button>

        </div>
</form>





{{>footer}}