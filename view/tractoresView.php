{{> header}}

<main role="main" class="container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Flota de tractores</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
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
                                <td><h6 class="font-medium mb-0">{{id}}</h6></td>
                                <td class="text-muted">{{marca}}</td>
                                <td class="text-muted">{{modelo}}</td>
                                <td class="text-muted">{{añoDeFabricacion}}</td>
                                <td class="text-muted">{{patente}}</td>
                                <td class="text-muted">{{numeroDeMotor}}</td>
                                <td class="text-muted">{{chasis}}</td>
                                <td class="text-muted">{{kilometros}}</td>
                                <td><a href="http://localhost/grupo14/tractores/detalle/tractorDetalle?id={{id}}" class="btn btn-primary {{actualizarTractor}}" role="button" aria-pressed="true" >Actualizar</a>
                                    <a href="http://localhost/grupo14/tractores/eliminarTractor?id={{id}}" class="btn btn-danger {{eliminarTractor}}" role="button" aria-pressed="true" >Dar Baja</a>
                                    <a href="http://localhost/grupo14/mantenimiento?id_tractor={{id}}" class="btn btn-warning active {{mantenimiento}}" role="button" aria-pressed="true">Mantenimiento</a>
                                </td>
                            </tr>
                            {{/tractores}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    <div class="col text-center mt-4 mb-4">
        <a href="http://localhost/grupo14/tractores/registrarTractor" class="btn btn-primary btn-lg {{agregarTractor}}" role="button" aria-pressed="true">Agregar Tractor</a>
    </div>
</div>

{{> footer}}