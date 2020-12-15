{{> header}}
<div class="formularioContainer">
    <h5 id="ingresar" class="mb-3 registerTxt">Registro de cargas de combustible</h5>
    <form action="./registrarCargaCombustible" class="col-md-8 formulario" method="post">
        <div class="form-row">
            {{#datos}}
            <div class="form-group col-md-6">
                <label for="idViaje" >Id viaje </label>
                <input type="number" name="idViaje" id="idViaje" class="form-control" value="{{idViaje}}" placeholder="{{idViaje}}" readonly="readonly">
            </div>

            <div class="form-group col-md-6">
                <label for="numeroDeDocumento_chofer" >Numero documento chofer</label>
                <input type="number" name="numeroDeDocumento_chofer" id="numeroDeDocumento_chofer" class="form-control" value="{{numeroDeDocumento_chofer}}" placeholder="{{numeroDeDocumento_chofer}}" readonly="readonly">
            </div>
            {{/datos}}

        </div>


        <div class="form-row">

            <div class="form-group col-md-12">
                <label for="lugar" >Lugar</label>
                <input name="lugar" class="form-control" type="lugar" id="lugar">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cantidad">Cantidad</label>
                <input name="cantidad" class="form-control" type="number" id="cantidad">
            </div>
            <div class="form-group col-md-4">
                <label for="importe">Importe</label>
                <input name="importe" class="form-control" type="number" id="importe">
            </div>
            <div class="form-group col-md-4">
                <label for="kilometrosRecorridos">Kilometros recorridos</label>
                <input name="kilometrosRecorridos" class="form-control" type="number" id="kilometrosRecorridos">
            </div>
        </div>
        <button class="btn btn-primary" id="aplicarRegistro" type="submit">Registrar</button>
    </form>
</div>

