{{>header}}

<div class="formularioContainer">
    {{#tractor}}
    <h5 class="registerTxt"> Mantenimiento</h5>

    <div class="mb-5">
        <p> Id: {{id}}</p>
        <p> Marca {{marca}} </p>
        <p> Patente {{patente}}</p>
        <p> Chasis {{chasis}}</p>

    </div>

    <form class="col-md-8 formulario">

        <div class="form-row">
            <div class="form-group col-md-12 ">
                <label for="inputEmail4">Fechas de Service</label>

                <select class="custom-select" size="6" name="marca" disabled>
                    <option selected >Fechas</option>
                    {{#fechas}}
                    <option value="{{id}}" disabled>Fecha: {{fecha}} / Hora: {{hora}}</option>
                 {{/fechas}}
                </select>
            </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-12">
                <label for="inputText4">Kilometros Unidad</label>
                <input type="number" class="form-control" id="inputText4" name="kilometros" value="{{kilometros}}" readonly>
            </div>


        </div>



        <a role="button"  href="http://localhost/grupo14/services/realizarService?id_tractor={{id}}" class="btn btn-primary {{service}}">Realizar Service</a>
    </form>
    {{/tractor}}
</div>

</main>



{{> footer}}