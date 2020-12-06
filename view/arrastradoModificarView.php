{{> header}}
{{#arrastrado}}
<link rel="stylesheet" href="/public/css/modificar.css">
<form action="../actualizarArrastrado" id="formModificarArrastrado" class="form-signin" method="post">
    <svg  width="1em" height="1em" viewBox="0 0 16 16" class="mb-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg>

    <br>
    <br>

    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Modificar arrastrado</h1>
    <label for="inputTipo" class="sr-only">Tipo de carga</label>
    <input name="tipo" type="text" id="inputTipo" class="form-control" placeholder="Tipo de carga" value="{{tipoCarga}}"  required>

    <br>
    Refrigeracion:
    <div class="form-check-inline">

        <input class="form-check-input" type="radio" name="refrigeracion" id="refrigeracionNo" value="No" checked>
        <label class="form-check-label" for="refrigeracionNoefrigeracionNo">
            No
        </label>
    </div>
    <div class="form-check-inline">
        <input class="form-check-input" type="radio" name="refrigeracion" id="refrigeracionSi" value="Si">
        <label class="form-check-label" for="refrigeracionSi">
            Si
        </label>
    </div>
    <br>
    <br>
    <input type="text" class="form-control" id="inputPeso" name="peso" placeholder="Peso neto" value="{{pesoNetoCarga}}" required>

<br>
    Hazard:
    <div class="form-check-inline">

        <input class="form-check-input" type="radio" name="hazard" id="hazardNo" value="No" checked>
        <label class="form-check-label" for="hazardNo">
            No
        </label>
    </div>

    <div class="form-check-inline">
        <input class="form-check-input" type="radio" name="hazard" id="hazardSi" value="Si">
        <label class="form-check-label" for="hazardSi">
            Si
        </label>
    </div>
    <br>
    <br>
    <label for="inputPatente" class="sr-only">Patente</label>
    <input name="patente"  id="inputPatente" class="form-control" placeholder="Patente" readonly='readonly' value="{{patente}}" required>
    <br>
    <label for="inputChasis" class="sr-only">Chasis</label>
    <input name="chasis"  id="inputChasis" class="form-control" placeholder="Chasis" readonly='readonly' value="{{numeroDeChasis}}" required>
    <br>
    <label for="inputId" class="sr-only">Id</label>
    <input name="id"  id="inputId" class="form-control" placeholder="Id" readonly='readonly' value="{{id}}" required>
    <br>
    <br>


    <button class="btn btn-lg btn-primary btn-block" id="aplicarCambios" type="submit">Actualizar</button>

</form>

{{/arrastrado}}
{{^arrastrado}}
Error arrastrado no encontrado
{{/arrastrado}}
{{> footer}}