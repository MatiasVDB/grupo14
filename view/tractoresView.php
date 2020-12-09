{{> header}}
<div class="card-body">
    <h5 class="card-title text-uppercase mb-0">Flota de tractores</h5>
</div>

<div class="table-responsive">
<table class="table table-borderless table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Año</th>
        <th scope="col">Patente</th>
        <th scope="col">Motor</th>
        <th scope="col">Chasis</th>
        <th scope="col">Kilometros</th>
        <th scope="col">Acciones </th>
    </tr>
    </thead>


    <tbody>

    {{#tractores}}
    <tr>
        <td>{{id}}</td>
        <td>{{marca}}</td>
        <td>{{modelo}}</td>
        <td>{{añoDeFabricacion}}</td>
        <td>{{patente}}</td>
        <td>{{numeroDeMotor}}</td>
        <td>{{chasis}}</td>
        <td>{{kilometros}}</td>
        <td><a href="http://localhost/grupo14/tractores/detalle/tractorDetalle?id={{id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Actualizar</a>
            <a href="http://localhost/grupo14/tractores/eliminarTractor?id={{id}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Dar Baja</a>
        </td>

    </tr>


    {{/tractores}}
    </tbody>

</table>

    <div class="col text-center">
        <a href="http://localhost/grupo14/tractores/registerTractor" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar Tractor</a>
    </div>

</div>

{{> footer}}