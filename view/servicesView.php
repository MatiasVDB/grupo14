{{> header}}

<main role="main" class="container">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Services</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Vehículo</th>
                                <th scope="col">Servicio</th>
                                <th scope="col">Mecanico Interviniente</th>
                                <th scope="col">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{#services}}
                            <tr>

                                <td class="text-muted">{{codigo}}</td>
                                <td class="text-muted">{{modelo}} {{marca}} {{patente}}</td>
                                <td class="text-muted">{{tipoDeService}}</td>
                                <td class="text-muted">{{nombre}} {{numeroDeDocumento}}</td>
                                <td><a href="http://localhost/grupo14/services/serviceDetalle?codigo={{codigo}}" class="btn btn-primary" role="button" aria-pressed="true" >Ver Detalles</a>
                                    <a href="http://localhost/grupo14/services/eliminarService?codigo={{codigo}}&id_tractor={{id_tractor}}" class="btn btn-danger" role="button" aria-pressed="true" >Dar Baja</a>
                                </td>
                            </tr>
                            {{/services}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</div>

{{> footer}}
