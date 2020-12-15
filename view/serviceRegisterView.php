{{>header}}

<div class="formularioContainer">

    <h5 class="txtRegister"> Service </h5>
<form class="col-md-8 formulario"  action="http://localhost/grupo14/services/registrarService" method="post">

    <div class="form-row">

        <div class="form-group col-md-4">
            <label>Código</label>
            <input type="number" class="form-control" id="inputText4" name="codigo" min="0" required>
            <p class="text-danger">{{mensaje}} </p>
        </div>

        <div class="form-group col-md-4">
            <label>Fecha</label>
            <input type="date" class="form-control" id="inputText4" name="fechaService" required>
        </div>

        <div class="form-group col-md-4">
            <label> Horario </label>
            <input type="time" class="form-control" id="inputTime" name="hora" required>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-12">
            <label>Vehículo</label>
            <select class="custom-select" name="id_tractor" multiple>
                <option selected>Vehículo</option>
                {{#tractor}}
                <option value="{{id}}">{{marca}} {{modelo}} {{patente}}</option>
                {{/tractor}}
            </select>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">

            <label>Repuestos</label>

            <select class="custom-select" name="repuestos" multiple>
                <option selected>Repuestos Cambiados</option>
                <option value="motor">Escape</option>
                <option value="ruedas">Ruedas</option>
                <option value="escape">Escape</option>
                <option value="valizas">Valizas</option>
                <option value="luces">Luces</option>
                <option value="xenon">Xenon</option>
                <option value="ruedas">Ruedas</option>
                <option value="bujias">Bujías</option>

            </select>
        </div>

        <div class="form-group col-md-6">

            <label>Tipo de Service</label>

            <select class="custom-select" name="tipoDeService" multiple>
                <option selected>Servicio</option>
                <option value="interno">Interno</option>
                <option value="externo">Externo</option>
            </select>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-12">

            <label>Mecánico a cargo del service</label>
            <select class="custom-select" name="numeroDeDocumento_mecanico" multiple>
                <option selected>Mecánico interviniente</option>
                {{#mecanicos}}
                <option value="{{numeroDeDocumento}}"> Nombre: {{nombre}} DNI: {{numeroDeDocumento}}</option>
                {{/mecanicos}}
            </select>
        </div>

    </div>


        <button type="submit" class="btn btn-primary" role="button" aria-pressed="true">Registrar Service</button>


</form>
</div>