{{> header}}

<main role="main" class="container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de cargas de combustible</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium">Id carga</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Documento</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Id viaje</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Lugar</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Cantidad</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Importe</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Kilometros recorridos</th>


                            </tr>
                            </thead>
                            <tbody>
                            {{#cargas}}
                            <tr>
                                <td>
                                    <h5 class="font-medium mb-0">{{id}}</h5>

                                </td>
                                <td>
                                    <span class="text-muted">{{numeroDeDocumento_chofer}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{idViaje}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{lugar}}</span><br>

                                </td>
                                <td>
                                    <span class="text-muted">{{cantidad}}</span>
                                </td>
                                <td>
                                    <span class="text-muted">{{importe}}</span>
                                </td>
                                <td>
                                    <span class="text-muted">{{kilometrosRecorridos}}</span>
                                </td>

                            </tr>
                            {{/cargas}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

{{> footer}}
