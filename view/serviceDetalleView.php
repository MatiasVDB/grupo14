{{>header}}

<div class="formularioContainer">

<h5 class="txtRegister"> Service </h5>

    {{#service}}

    <h6> Codigo: {{codigo}} </h6>

    <h6> Vehículo: {{marca}} {{modelo}} {{patente}} </h6>

    <h6> Repuestos Cambiados: {{repuestos}} </h6>

    <h6> Tipo De Service: {{tipoDeService}} </h6>

    <h6> Mecanico Interviniente: {{nombre}} DNI: {{numeroDeDocumento}} </h6>

        {{#fechaService}}

    <h6> Fecha del Service: {{fecha}} Horario: {{hora}}  </h6>

    {{/fechaService}}

    <button type="button"onClick="window.print()" class="btn btn-primary">Imprimir</button>

    <a href="http://localhost/grupo14/services" class="btn btn-primary" aria-pressed="true">Services</a>


{{/service}}
</div>
