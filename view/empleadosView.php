{{> header}}

<main role="main" class="container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de empleados</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium">Nombre</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Tipo de documento</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Documento</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Nacimiento</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Rol</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Administrar</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{#empleados}}
                            <tr>
                                <td>
                                    <h5 class="font-medium mb-0">{{nombre}}</h5>

                                </td>
                                <td>
                                    <span class="text-muted">{{tipoDeDocumento}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{numeroDeDocumento}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{mail}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{fechaDeNacimiento}}</span><br>

                                </td>
                                <td>

                                    <span class="text-muted">{{nivel}}</span>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./empleados/detalle/tipoDocumento={{tipoDeDocumento}}&numeroDeDocumento={{numeroDeDocumento}}'"> Actualizar</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./empleados/eliminar?tipoDocumento={{tipoDeDocumento}}&numeroDeDocumento={{numeroDeDocumento}}'" > Dar Baja</button>
                                </td>
                            </tr>
                            {{/empleados}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

{{> footer}}
