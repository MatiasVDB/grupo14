{{> header}}
{{#arrastrado}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Modificar arrastrado</h5>

    <p> Identificación {{id}} </p>

    <p> Patente {{patente}} </p>

    <p> Número Chasis {{numeroDeChasis}}</p>

<form action="../actualizarArrastrado" class="col-md-8 formulario" method="post">

    <input  type="hidden" name="patente"  id="inputPatente" class="form-control"  value="{{patente}}">

    <input type="hidden" name="chasis"  id="inputPatente" class="form-control"  value="{{numeroDeChasis}}">

    <div class="form-row">

    <div class="col-md-8">

        <label> Tipo de carga  </label>

        <select class="form-control category-select" id="inputTipo" name="id_carga">
            <option value="{{id_carga}}">{{tipoCarga}}(Seleccionado)</option>
            <option value="1">Granel</option>
            <option value="2">Liquida</option>
            <option value="3"">20"</option>
            <option value="4"">40"</option>
            <option value="5">Jaula</option>
            <option value="6">CarCarrier</option>
        </select>
    </div>

    </div>

        <br>

    <button type="submit" class="btn btn-primary">Actualizar</button>

</form>

</div>

{{/arrastrado}}
{{^arrastrado}}
Error arrastrado no encontrado
{{/arrastrado}}
{{> footer}}