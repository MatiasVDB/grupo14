{{> header}}
<main role="main" class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de cargas</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0  font-medium">ID</th>
                                <th scope="col" class="border-0  font-medium">Tipo</th>
                                <th scope="col" class="border-0  font-medium">Peso neto</th>
                                <th scope="col" class="border-0  font-medium">Hazard</th>
                                <th scope="col" class="border-0  font-medium">IMO Class</th>
                                <th scope="col" class="border-0  font-medium">Reefer</th>
                                <th scope="col" class="border-0  font-medium">Temperatura</th>
                                <th scope="col" class="border-0  font-medium">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{#cargas}}
                            <tr>
                                <td>
                                    <h6 class="font-medium mb-0">{{id}}</h6>
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
                                    <span class="text-muted">{{imo}}</span>
                                </td>
                                <td>
                                    <span class="text-muted">{{reefer}}</span>
                                </td>
                                <td>

                                    <span class="text-muted">{{temperatura}}</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./cargas/detalle/id={{id}}'" {{actualizarCarga}}> Actualizar</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./cargas/eliminar?id={{id}}'" {{eliminarCarga}}> Dar Baja</button>
                                </td>
                                {{/cargas}}
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center mt-4 mb-4">
            <a href="cargas/registerCarga" class="btn btn-primary btn-lg {{agregarCarga}}" role="button" aria-pressed="true">Agregar Carga</a>
        </div>
    </div>
{{> footer}}
