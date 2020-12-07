{{> header}}

<div class="col">

    <h1> Proforma N°{{numero}} </h1>

</div>

<form action="" class="form-signin" method="post">
    <br>

    <div class="form-check-inline">

        <div class="col">
            <label for="inputNumero">Número</label>
            <input name="numero" placeholder="{{numero}}" type="number" id="inputNumero" class="form-control" min="1000" disabled>

            <p class="text-danger"> {{mensaje}} </p>

        </div>


        <div class="col">
            <label for="inputTipo">Fecha</label>
            <input name="fecha" type="text" id="inputFecha" placeholder="{{fecha}}" class="form-control" disabled>

        </div>

    </div>

    <br>

    <div class="col">
        <h6> Datos del Cliente </h6>
    </div>
    <div class="form-check-inline">

        {{#cliente}}
        <div class="col">

            <label class="sr-only" for="inlineFormInputGroup">denominación</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">DENOMINACIÓN</div>
                </div>
                <input type="text" class="form-control" id="disabledInput" placeholder="{{denominacion}}" disabled>
            </div>
        </div>

        <div class="col">
            <label class="sr-only" for="inlineFormInputGroup">CUIT</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">CUIT</div>
                </div>
                <input type="number" class="form-control" id="disabledInput" value="{{CUIT}}" name="CUIT_cliente"
                       readonly="readonly">
            </div>
        </div>
    </div>


    <div class="form-check-inline">
        <div class="col">
            <label class="sr-only" for="inlineFormInputGroup">dirección</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">DIRECCIÓN</div>
                </div>
                <input type="text" class="form-control" id="disabledInput" placeholder="{{direccion}}" disabled>
            </div>

        </div>

        <div class="col">
            <label class="sr-only" for="inlineFormInputGroup">telefono</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">TELÉFONO</div>
                </div>
                <input type="tel" class="form-control" id="disabledInput" placeholder="{{telefono}}" disabled>
            </div>
        </div>


        <div class="col">
            <label class="sr-only" for="inlineFormInputGroup">email</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">EMAIL</div>
                </div>
                <input type="email" class="form-control" id="disabledInput" placeholder="{{email}}" disabled>
            </div>
        </div>

    </div>


    <div class="form-check-inline">

        <div class="col">
            <label class="sr-only" for="inlineFormInputGroup">contactoUno</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">CONTACTO UNO</div>
                </div>
                <input type="text" class="form-control" id="disabledInput" placeholder="{{contacto1}}" disabled>
            </div>
        </div>

        <div class="col">
            <label class="sr-only" for="inlineFormInputGroup">contactoDos</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">CONTACTO DOS</div>
                </div>
                <input type="text" class="form-control" id="disabledInput" placeholder="{{contacto2}}" disabled>
            </div>


        </div>

        {{/cliente}}
    </div>

    <div class="col">
        <h6> Datos del viaje </h6>
    </div>

    <div class="form-check-inline">
        {{#viaje}}
        <div class="col">
            <input type="hidden" name="id_viaje" value="{{id}}">

            <label> Origen </label>
            <input type="text" class="form-control" id="origen" placeholder="{{origen}}" name="origen" disabled>

        </div>

    </div>

    <br>

    <div class="form-check-inline">
        <div class="col">

            <label> Destino </label>
            <input type="text" class="form-control" id="destino" placeholder="{{destino}}" name="destino" disabled>

        </div>

    </div>

    <br>

    <div class="form-check-inline">


        <div class="col">


            <label> Fecha de carga</label>
            <input type="date" class="form-control" id="fechaCarga" placeholder="{{fechaCarga}}" name="fechaCarga"
                   disabled>

        </div>

    </div>

    <br>
    <div class="form-check-inline">
        <div class="col">
            <label> Tiempo esperado de arribo </label>
            <input type="time" class="form-control" id="ETA" placeholder="{{ETA}}" name="eta" disabled>

        </div>

    </div>

    {{/viaje}}

    </div>

    <br>

    <div class="col">
        <h6> Carga </h6>
    </div>

    <div class="form-check-inline">

        {{#carga}}

        <input type="hidden" value="{{id}}" name="id_carga">

        <div class="col">

            <label> Tipo </label>

            <input type="text" class="form-control" id="tipo" placeholder="{{tipo}}" name="tipo" disabled>

        </div>

    </div>

    <br>

    <div class="form-check-inline">

        <div class="col">

            <label> Peso </label>

            <input type="number" class="form-control" id="peso" placeholder="{{pesoNeto}}" name="peso" disabled>

        </div>

    </div>

    <br>
    <div class="form-check-inline">


        <div class="col-2">
            <label> Hazard</label>
            <input type="text" placeholder="{{hazard}}" id="hazard" name="hazard" disabled>
            <p> imoClass: {{imoClass}} </p>
        </div>


    </div>

    <br>

    <div class="form-check-inline">

        <div class="col-2">

            <label> Reefer </label>
            <input type="text" placeholder="{{reefer}}" id="reefer" name="reefer" disabled>
            <p> temperatura: {{temperatura}}° </p>
        </div>

    </div>

    {{/carga}}

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
            {{#empleado}}

            <input type="text" name="nombre" value="{{nombre}} {{numeroDeDocumento}}" disabled>


            <input type="hidden" value="{{tipoDeDocumento}}" name="tipoDeDocumento_usuario">
            <input type="hidden" value="{{numeroDeDocumento}}" name="numeroDeDocumento_usuario">

            {{/empleado}}

        </div>

    </div>

    <br> <br>

    <div class="col">

        <h5> Código QR: </h5>
        {{#viaje}}
        <img src="./imprimirQR?id_viaje={{id}}" />
        {{/viaje}}

    </div>

    <div class="col">

        <button type="button"onClick="window.print()" class="btn btn-primary">Imprimir</button>

    </div>

</form>

{{> footer}}