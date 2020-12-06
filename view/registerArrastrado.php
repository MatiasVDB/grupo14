{{> header}}

<form action="./registrarArrastrado" id="formModificarArrastrado" class="form-signin" method="post">
    <br>
    <br>

    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Agregar arrastrado</h1>
    <label for="inputTipo" class="sr-only">Tipo de carga</label>
    <input name="tipo" type="text" id="inputTipo" class="form-control" placeholder="Tipo de carga"   required>

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
    <input type="text" class="form-control" id="inputPeso" name="peso" placeholder="Peso neto" required>

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
    <input name="patente"  id="inputPatente" class="form-control" placeholder="Patente" required>
    <br>
    <label for="inputChasis" class="sr-only">Chasis</label>
    <input name="chasis"  id="inputChasis" class="form-control" placeholder="Chasis"  required>
    <br>
    <br>


    <button class="btn btn-lg btn-primary btn-block" id="aplicarCambios" type="submit">Agregar</button>

    {{error}}

</form>
{{> footer}}