{{> header}}

<main role="main" class="container">

    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1 id="bienvenido" class="display-3">{{mensajeBienvenida}}</h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <h2>Flota de vehiculos</h2>
                <p>Ver la flota de vehiculos de la empresa, estado, reportes, alarmas, posición actual,
                    calendario de services, etc. </p>
                <p><a class="btn btn-secondary" href="flotaDeVehiculos.html" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Estadisticas de uso</h2>
                <p>Reportes estadísticos del uso de los vehículos, tiempo fuera de servicio, kilómetros recorridos,
                    costo de mantenimiento, costo por kilómetro recorrido, reporte de desvíos, kilómetros,
                    combustible, tiempos, etc. </p>
                <p><a class="btn btn-secondary" href="estadisticasVehiculos.html" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Viajes</h2>
                <p>Vehículo, origen, destino, chofer asignado, cliente, tipo de carga,
                    fechas, tiempo estimado de viaje, tiempo real, desviación, kilómetros recorridos previstos,
                    kilómetros recorridos reales, combustible consumido (previsto y real), etc. ( supervisor, el administrador y/o
                    el mecánico pueden consultar la posición actual del vehículo en un mapa, kilómetros recorridos,
                    combustible consumido)</p>
                <p><a class="btn btn-secondary" href="viajes.html" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Mantenimiento</h2>
                <p>Mantenimiento de los vehículos. Fecha del services, km de la unidad, costo, service
                    interno/externo, mecánico interviniente, repuestos cambiados, etc.</p>
                <p><a class="btn btn-secondary" href="mantenimiento.html" role="button">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Empleados</h2>
                <p>Lista de empleados de la empresa (Choferes, Mecánicos, etc.)
                </p>
                <p><a class="btn btn-secondary" href="empleados.html" role="button">Ver detalles &raquo;</a></p>
            </div>

        </div>
    </div>


</main>

{{> footer}}
