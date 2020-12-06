{{> header}}
<div class="card-body">
    <h5 class="card-title text-uppercase">Flota de arrastrados</h5>
</div>

<div class="table-responsive">
    <table class="table table-borderless table-dark">
        <thead>
        <tr>
            <th scope="col">Patente</th>
            <th scope="col">Chasis</th>
            <th scope="col">Tipo</th>
            <th scope="col">Peso neto</th>
            <th scope="col">Refrigeracion</th>
            <th scope="col">Hazard</th>
            <th scope="col">Acciones </th>
        </tr>
        </thead>


        <tbody>

        {{#arrastrados}}
        <tr>

            <td>{{patente}}</td>
            <td>{{numeroDeChasis}}</td>
            <td>{{tipoCarga}}</td>
            <td>{{pesoNetoCarga}}</td>
            <td>{{refrigeracionCarga}}</td>
            <td>{{hazardCarga}}</td>
            <td><a href="arrastrados/vistaActualizarArrastrado/patente={{patente}}&chasis={{numeroDeChasis}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Actualizar</a>
            <a href="arrastrados/eliminarArrastrado?patente={{patente}}&chasis={{numeroDeChasis}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Dar Baja</a></td>
        </tr>


        {{/arrastrados}}
        </tbody>


    </table>
    <div class="col text-center">
    <a href="arrastrados/registerArrastrado" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar arrastrado</a>
    </div>
</div>

{{> footer}}
