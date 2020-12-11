{{> header}}
{{#arrastrado}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Modificar arrastrado</h5>

    <p> Id: {{id}} </p>

    <p> Patente: {{patente}} </p>

    <p> Número Chasis: {{numeroDeChasis}}</p>

<form action="../actualizarArrastrado" class="col-md-8 formulario" method="post">

    <input  type="hidden" name="id"  class="form-control"  value="{{id}}">


    <div class="form-row">

    <div class="col-md-12">

        <label> Tipo de carga  </label>

        <select class="form-control category-select" id="inputTipo" name="tipo">
            <option value="{{tipo}}">{{tipo}}(Seleccionado)</option>
            <option value="Araña">Araña</option>
            <option value="Jaula">Jaula</option>
            <option value="Tanque"">Tanque</option>
            <option value="Granel"">Granel</option>
            <option value="CarCarrier">CarCarrier</option>
        </select>
    </div>

    </div>



    <button type="submit" class="btn btn-primary mt-4">Actualizar</button>

</form>

</div>

{{/arrastrado}}
{{^arrastrado}}
Error arrastrado no encontrado
{{/arrastrado}}
{{> footer}}