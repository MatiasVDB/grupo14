{{> header}}
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
                                <th scope="col" class="border-0  font-medium">Costeo estimado kilometros</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado combustible</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado ETD</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado ETA</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado viaticos</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado peajes y pesajes</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado extras</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado fee</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado hazard</th>
                                <th scope="col" class="border-0  font-medium">Costeo estimado reefer</th>
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
                                <td> <span class="text-muted">{{costeoEstimado_Kilometros}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_Combustible}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_ETD}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_ETA}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_Viaticos}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_Peajes_Pesajes}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_Extras}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_FEE}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_Hazard}}</span> </td>
                                <td> <span class="text-muted">{{costeoEstimado_Reefer}}</span> </td>


                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='./proforma/detalle/numero={{numero}}'" > Actualizar</button>
                                    <button type="button" class="btn btn-danger" onclick="location.href='./proforma/eliminar?numeroProforma={{numero}}'" > Dar Baja</button>
                                </td>
                            </tr>
                            {{/proformas}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center mt-4 mb-4">
            <a href="http://localhost/grupo14/DatosProforma" class="btn btn-primary btn-lg {{agregarCliente}}" role="button" aria-pressed="true" >Agregar proforma</a>
        </div>
    </div>
</main>
{{> footer}}
