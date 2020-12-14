{{>header}}

<div class="col-12">


</div>
{{#proforma}}
<div class="formularioContainer">


    <h5 class="registerTxt"> Modificar datos de la Proforma {{numero}}, {{fecha}}</h5>

    <form action="http://localhost/grupo14/proforma/procesarActualizacionProforma" class="formulario" method="post">
        <input type="hidden" name="numero" value="{{numero}}">
        <input type="hidden" name="fecha" value="{{fecha}}">

        <div class="col-12">

            <label> <h6> Cliente </h6> </label>
            <select class="custom-select mb-4" multiple name="CUIT_cliente">
                <option value="{{CUIT_cliente}}" selected>CUIT: {{CUIT_cliente}}(seleccionado)</option>


                {{#clientes}}
                <option value="{{CUIT}}"> CUIT: {{CUIT}} / {{denominacion}}</option>

                {{/clientes}}
            </select>



            <label> <h6> Viaje</h6></label>
            <select class="custom-select mb-4" multiple name="id_viaje">
                <option value="{{id_viaje}}" selected>Id viaje: {{id_viaje}}(seleccionado)</option>
                {{#viajes}}
                <option value="{{id}}">Codigo: {{id}} - Origen: {{origen}} / Destino:{{destino}} </option>

                {{/viajes}}
            </select>



            <label> <h6>Carga</h6></label>
            <select class="custom-select mb-4" multiple name="id_carga">
                <option value="{{id_carga}}" selected>Id carga: {{id_carga}}(seleccionado)</option>
                {{#cargas}}
                <option value="{{id}}"> ID Carga: {{id}} / Tipo: {{tipo}} </option>

                {{/cargas}}
            </select>



            <label> <h6> Chofer </h6></label>
            <select class="custom-select mb-5"  multiple name="numeroDeDocumento_usuario">
                <option value="{{numeroDeDocumento_chofer}}" selected>Numero de documento chofer: {{numeroDeDocumento_chofer}}(seleccionado)</option>

                {{#empleados}}
                <option value="{{numeroDeDocumento}}"  >{{nombre}}({{numeroDeDocumento}}) </option>
                {{/empleados}}

            </select>

            <div class="form-row">
                <div class="col-md-4">
                    <h5> Costeo Estimado </h5>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label> Kilometros </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Kilometros" name="kilometrosCosteoEsperado" min="0" value="{{costeoEstimado_Kilometros}}">
                </div>

                <div class="form-group col-md-6">
                    <label> Combustible </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Combustible" name="combustibleCosteoEsperado" min="0" value="{{costeoEstimado_Combustible}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label> Tiempo Estimado de Partida </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Tiempo estimado de partida" name="etdCosteoEsperado" min="0" value="{{costeoEstimado_ETD}}">
                </div>

                <div class="form-group col-md-6">
                    <label> Tiempo Estimado de Arribo </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Tiempo estimado de arribo" name="etaCosteoEsperado" min="0" value="{{costeoEstimado_ETA}}">
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label> Viaticos </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Viaticos" name="viaticosCosteoEsperado" min="0" value="{{costeoEstimado_Viaticos}}">
                </div>

                <div class="form-group col-md-6">
                    <label> Pajes y Pesajes </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Peajes y pesajes" name="peajesPesajesCosteoEsperado" min="0" value="{{costeoEstimado_Peajes_Pesajes}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label> Extras </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Extras" name="extrasCosteoEsperado" min="0" value="{{costeoEstimado_Extras}}">
                </div>

                <div class="form-group col-md-6">
                    <label> FEE </label>

                    <input type="number" class="form-control" id="email" placeholder="$ FEE" name="feeCosteoEsperado" min="0" value="{{costeoEstimado_FEE}}">
                </div>
            </div>

            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label> Hazard </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Hazard" name="hazardCosteoEsperado" min="0" value="{{costeoEstimado_Hazard}}">
                </div>

                <div class="form-group col-md-6">
                    <label> Reefer </label>

                    <input type="number" class="form-control" id="email" placeholder="$ Reefer" name="reeferCosteoEsperado" min="0" value="{{costeoEstimado_Reefer}}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary"> Enviar Datos </button>
        </div>
    </form>
</div>
{{/proforma}}

{{>footer}}