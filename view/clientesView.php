{{> header}}

<main role="main" class="container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de clientes</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium">Cuit</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Denominacion</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Contacto 1</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Contacto 2</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Telefono</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Direccion</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{#clientes}}
                            <tr>
                                <td>
                                    <h5 class="font-medium mb-0">{{CUIT}}</h5>

                                </td>
                                <td>
                                    <span class="text-muted">{{denominacion}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{email}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{contacto1}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{contacto2}}</span><br>

                                </td>
                                <td>

                                    <span class="text-muted">{{telefono}}</span>

                                </td>
                                <td>

                                    <span class="text-muted">{{direccion}}</span>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./clientes/detalle/CUIT={{CUIT}}'"> Actualizar</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./clientes/eliminar?CUIT={{CUIT}}'" > Dar Baja</button>
                                </td>
                            </tr>
                            {{/clientes}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="col text-center">
            <a href="clientes/registerCliente" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar Cliente</a>
        </div>
    </div>


</main>

{{> footer}}
