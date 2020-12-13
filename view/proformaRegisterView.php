{{> header}}

<div class="formularioContainer">

    <h5 class="registerTxt"> Proforma</h5>

<form action="insertarDatosEnLaProforma" class="col-md-8 formulario" method="post">

    <div class="form-row mb-4">


        <div class="form-group col-md-6">
            <label for="inputNumero">Número</label>
            <input name="numero" type="number" id="inputNumero" class="form-control" min="1000" required>

            <p class="text-danger"> {{mensaje}} </p>

        </div>


        <div class="form-group col-md-6">
            <label for="inputTipo">Fecha</label>
            <input name="fecha" type="date" id="inputFecha" class="form-control">

        </div>

    </div>


    <div class="form-row">

    <div class="col-md-4 mb-2">
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
        <div class="form-group col-md-12">
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



    <div class="form-row mb-4">

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



    <div class="form-row mb-4">

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



    <div class="form-row">

        <div class="col-md-4">
            <h5> Datos de la Carga </h5>
        </div>

    </div>
    {{#carga}}

    <div class="form-row">

        <input type="hidden" name="id_carga" value="{{id}}">

        <div class="form-group col-md-6">
            <label> Tipo </label>
            <input type="text" class="form-control" id="tipo" placeholder="{{tipo}}" name="tipo" disabled>

        </div>

        <div class="form-group col-md-6">

            <label> Peso Neto </label>
            <input type="number" class="form-control" id="pesoNeto" placeholder="{{pesoNeto}}" name="pesoNeto" disabled>

        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">


            <label> Hazard</label>
            <input type="text" class="form-control" id="hazard" placeholder="{{hazard}}" name="hazard"
                   disabled>

        </div>

        <div class="form-group col-md-6">
            <label> IMO </label>
            <input type="text" class="form-control" id="imo" placeholder="{{imo}}" name="imo" disabled>

        </div>

    </div>

    <div class="form-row mb-4">

        <div class="form-group col-md-6">


            <label> Reefer</label>
            <input type="text" class="form-control" id="reefer" placeholder="{{reefer}}" name="reefer"
                   disabled>

        </div>

        <div class="form-group col-md-6">
            <label> Temperatura </label>
            <input type="text" class="form-control" id="temperatura" placeholder="{{temperatura}}" name="temperatura" disabled>

        </div>

    </div>

    {{/carga}}



    <div class="form-row">

        <div class="col-md-4">
            <h5> Costeo Estimado </h5>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">
            <label> Kilometros </label>
            <input type="number" class="form-control" id="email" placeholder="$ Kilometros"
                   name="kilometrosCosteoEsperado" min="0">

        </div>

        <div class="form-group col-md-6">

            <label> Combustible </label>
            <input type="number" class="form-control" id="email" placeholder="$ Combustible"
                   name="combustibleCosteoEsperado" min="0">

        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">

            <label> Tiempo Estimado de Partida </label>

            <input type="number" class="form-control" id="email" placeholder="$ Tiempo estimado de partida"
                   name="etdCosteoEsperado" min="0">

        </div>

        <div class="form-group col-md-6">

            <label> Tiempo Estimado de Arribo </label>

            <input type="number" class="form-control" id="email" placeholder="$ Tiempo estimado de arribo"
                   name="etaCosteoEsperado" min="0">

        </div>

    </div>


    <div class="form-row">

        <div class="form-group col-md-6">

            <label> Viaticos </label>

            <input type="number" class="form-control" id="email" placeholder="$ Viaticos" name="viaticosCosteoEsperado"
                   min="0">

        </div>

        <div class="form-group col-md-6">

            <label> Pajes y Pesajes </label>

            <input type="number" class="form-control" id="email" placeholder="$ Peajes y pesajes"
                   name="peajesPesajesCosteoEsperado" min="0">

        </div>


    </div>

    <div class="form-row">


        <div class="form-group col-md-6">

            <label> Extras </label>

            <input type="number" class="form-control" id="email" placeholder="$ Extras" name="extrasCosteoEsperado"
                   min="0">

        </div>

        <div class="form-group col-md-6">

            <label> FEE </label>
            <input type="number" class="form-control" id="email" placeholder="$ FEE" name="feeCosteoEsperado" min="0">

        </div>



    </div>


    <div class="form-row mb-4">

        <div class="form-group col-md-6">

            <label> Hazard </label>

            <input type="number" class="form-control" id="email" placeholder="$ Hazard" name="hazardCosteoEsperado"
                   min="0">

        </div>


        <div class="form-group col-md-6">

            <label> Reefer </label>

            <input type="number" class="form-control" id="email" placeholder="$ Reefer" name="reeferCosteoEsperado"
                   min="0">

        </div>

    </div>


    <div class="form-row">
        <div class="col-md-4">
            <h5> Chofer Asignado </h5>
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            {{#empleado}}
            <input type="text" class="form-control" name="nombre" value="{{nombre}} {{numeroDeDocumento}}" disabled>
            <input type="hidden" value="{{numeroDeDocumento}}" name="numeroDeDocumento_usuario">
            {{/empleado}}
        </div>
    </div>
        <button type="submit" class="btn btn-primary mb-4 mt-4">Enviar al chofer</button>

        </form>
</div>

            {{> footer}}