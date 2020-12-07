{{> header}}

<form action="./registrarArrastrado" id="formModificarArrastrado" class="form-signin" method="post">
    <br>
    <br>

    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Agregar arrastrado</h1>

    <div class="form-group col-md-4">
        <label for="inputTipo" >Tipo</label>
        <select class="form-control category-select" id="inputTipo" name="tipo">
            <option value="Granel">Granel</option>
            <option value="Liquida">Liquida</option>
            <option value="20"">20"</option>
            <option value="40"">40"</option>
            <option value="Jaula">Jaula</option>
            <option value="CarCarrier">CarCarrier</option>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="refrigeracion" >Refrigeracion</label>
        <select class="form-control category-select" id="refrigeracion" name="refrigeracion">
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
    </div>

    <label for="inputPeso" class="sr-only">Peso neto</label>
    <input type="text" class="form-control" id="inputPeso" name="peso" placeholder="Peso neto" required>


    <div class="form-group col-md-4">
        <label for="hazard" >Hazard</label>
        <select class="form-control category-select" id="hazard" name="hazard">
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
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

    <div class="form-group col-md-4">
        <label for="hazard" >Carga</label>
        <select class="form-control category-select" id="carga" name="carga">
            {{#cargas}}
            <option value="{{id}}">{{id}}, {{tipo}}</option>
            {{/cargas}}
        </select>
    </div>

    <button class="btn btn-lg btn-primary btn-block" id="aplicarCambios" type="submit">Agregar</button>

    {{error}}

</form>
{{> footer}}