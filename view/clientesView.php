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
                                <th scope="col" class="border-0  font-medium">Cuit</th>
                                <th scope="col" class="border-0  font-medium">Denominacion</th>
                                <th scope="col" class="border-0  font-medium">Email</th>
                                <th scope="col" class="border-0  font-medium">Contacto 1</th>
                                <th scope="col" class="border-0  font-medium">Contacto 2</th>
                                <th scope="col" class="border-0  font-medium">Telefono</th>
                                <th scope="col" class="border-0  font-medium">Direccion</th>
                                <th scope="col" class="border-0  font-medium">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{#clientes}}
                            <tr>
                                <td> <h6 class="font-medium mb-0">{{CUIT}}</h6> </td>
                                <td> <span class="text-muted mb-0">{{denominacion}}</span><br> </td>
                                <td> <span class="text-muted">{{email}}</span><br> </td>
                                <td> <span class="text-muted">{{contacto1}}</span><br> </td>
                                <td> <span class="text-muted">{{contacto2}}</span><br> </td>
                                <td> <span class="text-muted">{{telefono}}</span> </td>
                                <td> <span class="text-muted">{{direccion}}</span> </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./clientes/detalle/CUIT={{CUIT}}'" {{actualizarCliente}}> Actualizar</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./clientes/eliminar?CUIT={{CUIT}}'" {{borrarCliente}}> Dar Baja</button>
                                </td>
                            </tr>
                            {{/clientes}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center mt-4 mb-4">
            <a href="clientes/registerCliente" class="btn btn-primary btn-lg {{agregarCliente}}" role="button" aria-pressed="true" >Agregar Cliente</a>
        </div>
    </div>
</main>
{{> footer}}
