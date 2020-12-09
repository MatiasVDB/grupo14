{{> header}}

<main role="main" class="container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de Cargas</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium">ID</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Tipo</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Peso neto</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Hazard</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">IMO</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Reefer</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">temperatura</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{#cargas}}
                            <tr>
                                <td>
                                    <h5 class="font-medium mb-0">{{id}}</h5>
                                </td>
                                <td>
                                    <span class="text-muted">{{tipo}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{pesoNeto}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{hazard}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{imo}}</span><br>

                                </td>
                                <td>

                                    <span class="text-muted">{{reefer}}</span>

                                </td>
                                <td>

                                    <span class="text-muted">{{temperatura}}</span>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./cargas/detalle/id={{id}}'"> Actualizar</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./cargas/eliminar?id={{id}}'" > Dar Baja</button>
                                </td>
                            </tr>
                            {{/cargas}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <a href="cargas/registerCarga" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar Carga</a>
        </div>
    </div>

</main>

{{> footer}}
