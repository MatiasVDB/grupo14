{{> header}}
<div class="card-body">
    <h5 class="card-title text-uppercase mb-0">Viajes</h5>
</div>

<div class="table-responsive">
    <table class="table table-borderless table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Origen</th>
            <th scope="col">Destino</th>
            <th scope="col">Fecha de finalizacion</th>
            <th scope="col">Fecha de inicio</th>
            <th scope="col">Fecha de carga</th>
            <th scope="col">Tiempo real</th>
            <th scope="col">ETA</th>
            <th scope="col">ETD</th>
            <th scope="col">Kilometros final </th>
            <th scope="col">Kilometros actuales </th>
            <th scope="col">Combustible final</th>
            <th scope="col">Combustible consumido</th>
            <th scope="col">Id vehiculo</th>
            <th scope="col">Id arrastrado</th>
        </tr>
        </thead>
        <tbody>
        {{#viajes}}
        <tr>
            <td>{{id}}</td>
            <td>{{origen}}</td>
            <td>{{destino}}</td>
            <td>{{fechaFinalizacion}}</td>
            <td>{{fechaInicio}}</td>
            <td>{{fechaCarga}}</td>
            <td>{{tiempoReal}}</td>
            <td>{{ETA}}</td>
            <td>{{ETD}}</td>
            <td>{{kilometrosFinal}}</td>
            <td>{{kilometrosActuales}}</td>
            <td>{{combustibleFinal}}</td>
            <td>{{combustibleConsumido}}</td>
            <td>{{idVehiculo}}</td>
            <td>{{idArrastrado}}</td>
            <td>
                <button type="button" class="btn btn-primary" onclick="location.href='./viajes/detalle/id={{id}}'"> Actualizar</button>
                <button type="button" class="btn btn-danger" onclick="location.href='./viajes/eliminar?id={{id}}'" > Dar Baja</button>
            </td>
        </tr>
        {{/viajes}}
        </tbody>
    </table>
    <div class="col text-center">
        <a href="viajes/registerViaje" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar Viaje</a>
    </div>
</div>

{{> footer}}