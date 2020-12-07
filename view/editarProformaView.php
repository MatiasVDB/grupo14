{{> header}}

<div class="col">
{{#proforma}}
    <h1> Proforma N°{{numero}}</h1>




</div>

<form action="aplicarCambiosEnLaProforma" class="form-signin" method="post">
    <br>

    <div class="form-check-inline">

        <div class="col">
            <label for="inputNumero">Número</label>
            <input  name="numero" type="number" id="disabledInput" class="form-control" placeholder="{{numero}}" min="1000" disabled>

            <p class="text-danger">  </p>

        </div>


        <div class="col">
            <label for="inputTipo">Fecha</label>
            <input name="fecha" type="text" id="disabledInput" class="form-control" placeholder="{{fecha}}" disabled>

        </div>

    </div>

    <br>

    <div class="col">
        <h6> Datos del Cliente </h6>
    </div>
    <div class="form-check-inline">
        
        <div class="col">
            <label class="sr-only" for="inlineFormInputGroup">CUIT</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">CUIT</div>
                </div>
                <input type="number" class="form-control" id="disabledInput" placeholder="{{CUIT_cliente}}" name="CUIT_cliente"
                       readonly="readonly">
            </div>
        </div>
    </div>


    <div class="col">
        <h6> Datos del viaje </h6>
    </div>

    <div class="form-check-inline">

        <div class="col">
            <label> ID del viaje </label>
            <br>
            <input type="number" name="id_viaje" value="{{id_viaje}}" disabled>


    <br>

    <div class="col">
        <h6> Carga </h6>
    </div>

    <div class="form-check-inline">



        <input type="hidden" value="" name="id_carga">

        <div class="col">

            <label> ID de carga </label>

            <input type="text" class="form-control" id="id_carga" placeholder="{{id_carga}}" name="id_carga" disabled>

        </div>

    </div>

    <br>


    <br>

    <div class="col">
        <h6> Costeo </h6>
    </div>

    <div class="form-check-inline">

        <div class="col">
            <label> Estimado </label>
            <input type="number" class="form-control" id="email" placeholder="$ Kilometros"
                   name="kilometrosCosteoEsperado" min="0">

        </div>

    </div>

    <br>
    <br>

    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ Combustible"
                   name="combustibleCosteoEsperado" min="0">

        </div>

    </div>


    <br>
    <br>
    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ Tiempo estimado de partida"
                   name="etdCosteoEsperado" min="0">

        </div>

    </div>

    <br>
    <br>
    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$Tiempo estimado de arribo"
                   name="etaCosteoEsperado" min="0">

        </div>

    </div>

    <br>
    <br>

    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ Viaticos" name="viaticosCosteoEsperado"
                   min="0">

        </div>

    </div>

    <br>
    <br>
    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ Peajes y pesajes"
                   name="peajesPesajesCosteoEsperado" min="0">

        </div>

    </div>

    <br>
    <br>
    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ Extras" name="extrasCosteoEsperado"
                   min="0">

        </div>


    </div>

    <br>
    <br>
    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ Hazard" name="hazardCosteoEsperado"
                   min="0">

        </div>

    </div>

    <br>
    <br>
    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ Reefer" name="reeferCosteoEsperado"
                   min="0">

        </div>

    </div>

    <br>
    <br>
    <div class="form-check-inline">

        <div class="col">

            <input type="number" class="form-control" id="email" placeholder="$ FEE" name="feeCosteoEsperado" min="0">

        </div>

    </div>

    <br> <br>
    <div class="col">
        <h6> Chofer Asignado </h6>
    </div>

    <div class="form-check-inline">

        <div class="col-4">


            <input type="text" name="nombre" value="{{numeroDeDocumento_chofer}}" disabled>


            <input type="hidden" value="{{tipoDeDocumento_chofer}}" name="tipoDeDocumento_usuario">
            <input type="hidden" value="{{numeroDeDocumento_chofer}}" name="numeroDeDocumento_usuario">



        </div>

    </div>

    <br> <br>



    <div class="col">

        <button type="submit" class="btn btn-primary">Editar proforma</button>

    </div>

</form>
{{/proforma}}
{{^proforma}}
<br>
<h1>Error proforma no encontrada</h1>
{{/proforma}}

{{> footer}}