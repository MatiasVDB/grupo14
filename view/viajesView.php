{{> header}}
<main role="main" class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de viajes</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0  font-medium">Id</th>
                                <th scope="col" class="border-0  font-medium">Origen</th>
                                <th scope="col" class="border-0  font-medium">Destino</th>
                                <th scope="col" class="border-0  font-medium">Fecha inicio</th>
                                <th scope="col" class="border-0  font-medium">Fecha finalizacion</th>
                                <th scope="col" class="border-0  font-medium">ETA</th>
                                <th scope="col" class="border-0  font-medium">ETD</th>
                                <th scope="col" class="border-0  font-medium">Kilometros final </th>
                                <th scope="col" class="border-0  font-medium">Kilometros actuales </th>
                                <th scope="col" class="border-0  font-medium">Combustible final</th>
                                <th scope="col" class="border-0  font-medium">Combustible consumido</th>
                                <th scope="col" class="border-0  font-medium">Id vehiculo</th>
                                <th scope="col" class="border-0  font-medium">Id arrastrado</th>
                                <th scope="col" class="border-0  font-medium">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{#viajes}}
                            <tr>
                                <td> <h6 class="font-medium mb-0">{{id}}</h6> </td>
                                <td class="text-muted">{{origen}}</td>
                                <td class="text-muted">{{destino}}</td>
                                <td class="text-muted">{{fechaInicio}}</td>
                                <td class="text-muted">{{fechaFinalizacion}}</td>
                                <td class="text-muted">{{ETA}}</td>
                                <td class="text-muted">{{ETD}}</td>
                                <td class="text-muted">{{kilometrosFinal}}</td>
                                <td class="text-muted">{{kilometrosActuales}}</td>
                                <td class="text-muted">{{combustibleFinal}}</td>
                                <td class="text-muted">{{combustibleConsumido}}</td>
                                <td class="text-muted">{{idVehiculo}}</td>
                                <td class="text-muted">{{idArrastrado}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./viajes/detalle/id={{id}}'"> Actualizar</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./viajes/eliminar?id={{id}}'" > Dar Baja</button>
                                </td>
                            </tr>
                            {{/viajes}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <a href="viajes/registerViaje" class="btn btn-primary btn-lg mt-4 mb-4" role="button" aria-pressed="true">Agregar Viaje</a>
        </div>
    </div>
</main>
{{> footer}}