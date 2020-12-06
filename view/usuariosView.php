{{> header}}
<main>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card tarjeta">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de empleados</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Nombre</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Documento</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Nacimiento</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Rol</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Administrar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="pl-4">1</td>
                                <td>
                                    <h5 class="font-medium mb-0">Roberto Diaz</h5>

                                </td>
                                <td>
                                    <span class="text-muted muted-color">33348356</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">roberto@hotmail.com</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">15 Mar 1988</span><br>

                                </td>
                                <td>
                                    <select class="form-control category-select select-rol" id="exampleFormControlSelect1">
                                        <option selected>Chofer</option>
                                        <option>Supervisor</option>
                                        <option>Encargado</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle boton-circulo"><i class="fa fa-key"></i> </button>
                                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2 boton-circulo"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-lg btn-primary btn-block" id="aplicarCambios" type="submit">Aplicar cambios</button>
    </div>
</main>

{{#usuarios}}
<tr>
    <td>{{nombre}}</td>
    <td>{{password}}</td>
    <td>{{mail}}</td>

</tr>
{{/usuarios}}

{{> footer}}
