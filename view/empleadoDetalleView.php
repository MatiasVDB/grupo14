{{> header}}

<div class="formularioContainer">
    {{#empleado}}

    <h6 id="ingresar" class="mb-3 registerTxt">Actualización de Empleado</h6>
    <p> Numero Documento {{numeroDeDocumento}} </p>


<form action="../procesarActualizacionEmpelado" class="col-md-8 formulario" method="post">

    <div class="form-row">

        <div class="form-group col-md-6">
            <input type="hidden" name="numeroDeDocumento" value="{{numeroDeDocumento}}">

            <label for="inputNombre" >Nombre y Apellido</label>
            <input name="nombre" type="text" id="inputNombre" class="form-control" placeholder="Nombre y apellido" value="{{nombre}}" required>

        </div>

        <div class="form-group col-md-6">

    <label for="inputEmail" >Correo electrónico</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico"
           value="{{mail}}" required autofocus>

        </div>

    </div>

    <div class="form-row">

    <div class="form-group col-md-8">

        <label for="date-input" id="fechaNacimiento">Fecha de nacimiento</label>


            <input name="fechaDeNacimiento" class="form-control" type="date" value="{{fechaDeNacimiento}}"
                   id="date-input">

    </div>

        <div class="form-group col-md-4">

            <label for="exampleFormControlSelect1" id="exampleFormControlSelect1">Rol</label>

            <select class="form-control category-select" id="exampleFormControlSelect1" name="rolUsuario">
                <option value="{{rolUsuario}}">{{nivel}} (actual)</option>
                <option value="1">Chofer</option>
                <option value="2">Supervisor</option>
                <option value="3">Encargado del taller</option>
                <option value="4">Administrador</option>
            </select>
        </div>
    </div>
    <button class="btn btn-lg btn-primary btn-block" id="aplicarRegistro" type="submit">Actualizar</button>

</div>

</form>
{{/empleado}}

</div>

{{^empleado}}
Error empleado no encontrado
{{/empleado}}
{{> footer}}