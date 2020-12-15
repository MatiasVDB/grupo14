{{> header}}


<main role="main" class="container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Flota de arrastrados</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Patente</th>
                                <th scope="col">Chasis</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Acciones </th>
                            </tr>
                            </thead>
                            <tbody>

                            {{#arrastrados}}
                            <tr>
                                <td><h6 class="font-medium mb-0">{{id}}</h6></td>
                                <td class="text-muted">{{patente}}</td>
                                <td class="text-muted">{{numeroDeChasis}}</td>
                                <td class="text-muted">{{tipo}}</td>
                                <td><a href="http://localhost/grupo14/arrastrados/detalleArrastrado/id={{id}}" class="btn btn-primary {{actualizarArrastrado}}" role="button" aria-pressed="true">Actualizar</a>
                                    <a href="http://localhost/grupo14/arrastrados/eliminarArrastrado?id={{id}}" class="btn btn-danger {{eliminarArrastrado}}" role="button" aria-pressed="true">Dar Baja</a></td>
                            </tr>

                            {{/arrastrados}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center mt-4 mb-4">
            <a href="http://localhost/grupo14/arrastrados/registrarArrastrado" class="btn btn-primary btn-lg {{agregarArrastrado}}" role="button" aria-pressed="true">Agregar arrastrado</a>
        </div>
    </div>
</main>





{{> footer}}
