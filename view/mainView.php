{{> header}}

<main role="main" class="container">

        <div class="row">

            <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="../../public/img/1291276.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Lista de Empleados</h5>
                <p class="card-text">Sección para dar de alta, actualizar y eliminar empleados de la aplicación.</p>
            </div>


            <div class="card-body">
                <a href="Empleados" class="card-link btn btn-primary btn-lg btn-block">Acceder</a>
            </div>
        </div>
            </div>

            <div class="col-md-4">

                <div class="card" style="width: 18rem;">
                    <img src="../../public/img/793977.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Unidades</h5>
                        <p class="card-text">Sección para dar de alta, actualizar y elminar vehículos de la aplicación.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <a href="tractores/registerTractor"> Registrar Tractor </a>  </li>
                        <li class="list-group-item"><a href="arrastrados/registerArrastrado"> Registrar Arrastrado </a> </li>
                    </ul>
                    <div class="card-body">
                        <a href="tractores"> Tractores </a> |
                        <a href="arrastrados">  Arrastrados </a>
                    </div>
            </div>

        </div>


    <div class="col-md-4">

        <div class="card" style="width: 18rem;">
            <img src="../../public/img/3593794.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Proforma</h5>
                <p class="card-text">Sección para cargar la proforma del viaje que realizaran los choferes.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <a href="DatosProforma"> Cargar Profroma </a>  </li>
                <li class="list-group-item"><a href="proforma"> Lista de Proformas </a> </li>
            </ul>
            <div class="card-body">
                <a href="viajes"> Viajes </a> |
                <a href="clientes">  Clientes </a>
            </div>
        </div>

    </div>

        </div>

</main>

{{> footer}}
