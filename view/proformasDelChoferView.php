{{>header}}
<main role="main" class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Lista de proformas</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0  font-medium">Numero</th>
                                <th scope="col" class="border-0  font-medium">Fecha</th>
                                <th scope="col" class="border-0  font-medium">CUIT cliente</th>
                                <th scope="col" class="border-0  font-medium">Id viaje</th>
                                <th scope="col" class="border-0  font-medium">Documento chofer</th>
                                <th scope="col" class="border-0  font-medium">Id carga</th>
                                <th scope="col" class="border-0  font-medium">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{#proformas}}
                            <tr>
                                <td> <h6 class="font-medium mb-0">{{numero}}</h6> </td>
                                <td> <span class="text-muted">{{fecha}}</span><br> </td>
                                <td> <span class="text-muted">{{CUIT_cliente}}</span><br> </td>
                                <td> <span class="text-muted">{{id_viaje}}</span><br> </td>
                                <td> <span class="text-muted">{{numeroDeDocumento_chofer}}</span><br> </td>
                                <td> <span class="text-muted">{{id_carga}}</span> </td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./proformasDelChofer/detalle/numero={{numero}}'" > Ver Proforma</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./proforma/eliminar?numeroProforma={{numero}}'" > Finalizar Viaje</button>
                                </td>
                            </tr>
                            {{/proformas}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
{{> footer}}