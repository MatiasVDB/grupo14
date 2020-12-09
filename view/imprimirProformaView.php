{{> header}}

<div class="formularioContainer">

    <h5 class="registerTxt"> Imprimir Proforma </h5>

    {{#proforma}}

    <p> Número {{numero}}</p>
    <p> Fecha {{fecha}} </p>

<form action="" class="col-md-8 formulario" method="post">

            <input name="numero" placeholder="{{numero}}" type="hidden" id="inputNumero" class="form-control" min="1000" disabled>

            <p class="text-danger"> {{mensaje}} </p>

            <input name="fecha" type="hidden" id="inputFecha" placeholder="{{fecha}}" class="form-control" disabled>


    <div class="form-row">

        <div class="col-md-4">
            <h5> Datos del Cliente </h5>
        </div>

    </div>

    <div class="form-row">
        {{#cliente}}
        <div class="form-group col-md-6">

            <label>Denominación</label>
            <input type="text" class="form-control" id="disabledInput" placeholder="{{denominacion}}" disabled>

        </div>

        <div class="form-group col-md-6">
            <label>CUIT</label>
            <input type="number" class="form-control" id="disabledInput" value="{{CUIT}}" name="CUIT_cliente"
                   readonly="readonly">
        </div>

    </div>


    <div class="form-row">
        <div class="form-group col-md-8">
            <label> Dirección </label>
            <input type="text" class="form-control" id="disabledInput" placeholder="{{direccion}}" disabled>
        </div>


    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label>Teléfono</label>
            <input type="tel" class="form-control" id="disabledInput" placeholder="{{telefono}}" disabled>
        </div>

        <div class="form-group col-md-6">
            <label>Email</label>

            <input type="email" class="form-control" id="disabledInput" placeholder="{{email}}" disabled>
        </div>

    </div>



    <div class="form-row">

        <div class="form-group col-md-6">
            <label>Contacto Uno</label>
            <input type="text" class="form-control" id="disabledInput" placeholder="{{contacto1}}" disabled>
        </div>


        <div class="form-group col-md-6">
            <label>Contacto Dos</label>
            <input type="text" class="form-control" id="disabledInput" placeholder="{{contacto2}}" disabled>
        </div>


    </div>

    {{/cliente}}

    <br>

    <div class="form-row">

        <div class="col-md-4">
            <h5> Datos del Viaje </h5>
        </div>

    </div>

    <div class="form-row">
        {{#viaje}}

        <input type="hidden" name="id_viaje" value="{{id}}">

        <div class="form-group col-md-6">
            <label> Origen </label>
            <input type="text" class="form-control" id="origen" placeholder="{{origen}}" name="origen" disabled>

        </div>

        <div class="form-group col-md-6">

            <label> Destino </label>
            <input type="text" class="form-control" id="destino" placeholder="{{destino}}" name="destino" disabled>

        </div>

    </div>



    <div class="form-row">

        <div class="form-group col-md-6">


            <label> Fecha de inicio</label>
            <input type="date" class="form-control" id="fechaCarga" placeholder="{{fechaInicio}}" name="fechaInicio"
                   disabled>

        </div>

        <div class="form-group col-md-6">
            <label> Tiempo esperado de arribo </label>
            <input type="time" class="form-control" id="ETA" placeholder="{{ETA}}" name="eta" disabled>

        </div>

    </div>

    {{/viaje}}

    <br>
    <div class="form-row">

        <div class="col-md-4">
            <h5> Costeo Estimado </h5>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label> Kilometros </label>
            <input type="number" class="form-control" id="email" placeholder="{{costeoEstimado_Kilometros}}"
                   name="kilometrosCosteoEsperado" disabled >

        </div>

        <div class="form-group col-md-6">

            <label> Combustible </label>
            <input type="number" class="form-control" id="email" placeholder="${{costeoEstimado_Combustible}}"
                   name="combustibleCosteoEsperado" disabled>

        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">

            <label> Tiempo Estimado de Partida </label>

            <input type="number" class="form-control" id="email" placeholder="${{costeoEstimado_ETD}}"
                   name="etdCosteoEsperado" disabled>

        </div>

        <div class="form-group col-md-6">

            <label> Tiempo Estimado de Arribo </label>

            <input type="number" class="form-control" id="email" placeholder="${{costeoEstimado_ETA}}"
                   name="etaCosteoEsperado" disabled>

        </div>

    </div>


    <div class="form-row">

        <div class="form-group col-md-6">

            <label> Viaticos </label>

            <input type="number" class="form-control" id="email" placeholder="$ {{costeoEstimado_Viaticos}}" name="viaticosCosteoEsperado"
                   disabled>

        </div>

        <div class="form-group col-md-6">

            <label> Pajes y Pesajes </label>

            <input type="number" class="form-control" id="email" placeholder="$ {{costeoEstimado_Peajes_Pesajes}}"
                   name="peajesPesajesCosteoEsperado" disabled>

        </div>


    </div>

    <div class="form-row">


        <div class="form-group col-md-6">

            <label> Extras </label>

            <input type="number" class="form-control" id="email" placeholder="$ {{costeoEstimado_Extras}}" name="extrasCosteoEsperado"
                   disabled>

        </div>

        <div class="form-group col-md-6">

            <label> FEE </label>
            <input type="number" class="form-control" id="email" placeholder="$ {{costeoEstimado_FEE}}" name="feeCosteoEsperado" disabled>

        </div>



    </div>


    <div class="form-row">

        <div class="form-group col-md-6">

            <label> Hazard </label>

            <input type="number" class="form-control" id="email" placeholder="$ {{costeoEstimado_Hazard}}" name="hazardCosteoEsperado"
                   disabled>

        </div>


        <div class="form-group col-md-6">

            <label> Reefer </label>

            <input type="number" class="form-control" id="email" placeholder="$ {{costeoEstimado_Kilometros}}" name="reeferCosteoEsperado"
                   disabled>

        </div>

    </div>

    <br>
    <div class="form-row">

        <div class="col-md-4">
            <h5> Chofer Asignado </h5>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            {{#empleado}}

            <input type="text" class="form-control" name="nombre" value="{{nombre}} {{numeroDeDocumento}}" disabled>

            <input type="hidden" value="{{tipoDeDocumento}}" name="tipoDeDocumento_usuario">
            <input type="hidden" value="{{numeroDeDocumento}}" name="numeroDeDocumento_usuario">

            {{/empleado}}

        </div>

    </div>
    <br> <br>

    <div class="col">

        <h5> Código QR: </h5>
        {{#viaje}}
        <img src="./imprimirQR?id_viaje={{id}}&numeroDeDocumento_chofer={{numeroDeDocumentoChofer}}&tipoDeDocumento_chofer={{tipoDocumentoChofer}}" />
        {{/viaje}}

    </div>

    {{/proforma}}

    <div class="col">

        <button type="button"onClick="window.print()" class="btn btn-primary">Imprimir</button>

    </div>

</form>

</div>

{{> footer}}