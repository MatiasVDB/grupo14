{{> header}}
{{#empleado}}
<form action="../procesarActualizacionEmpelado" class="form-signin col-md-8 align-middle" method="post">

    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Actualización de Empleado</h1>

    <br>

    <h6> DNI {{numeroDeDocumento}} Tipo {{tipoDeDocumento}} </h6>



    <div class="form-row">

        <div class="form-group col-md-4">

            <input type="hidden" name="numeroDeDocumento" value="{{numeroDeDocumento}}">

            <input type="hidden" name="tipoDocumento" value="{{tipoDeDocumento}}">

    <label for="inputNombre" >Nombre y Apellido</label>
    <input name="nombre" type="text" id="inputNombre" class="form-control" placeholder="Nombre y apellido"
           value="{{nombre}}" required>

        </div>

        <div class="form-group col-md-4">

    <label for="inputEmail" >Correo electrónico</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico"
           value="{{mail}}" required autofocus>

        </div>

    </div>

    <div class="form-row">

    <div class="form-group col-md-4">

        <label for="date-input" id="fechaNacimiento">Fecha de nacimiento</label>


            <input name="fechaDeNacimiento" class="form-control" type="date" value="{{fechaDeNacimiento}}"
                   id="date-input">

    </div>

    </div>

        <div class="form-row">

        <div class="form-group col-md-4">

            <label for="exampleFormControlSelect1" id="exampleFormControlSelect1">Rol</label>

            <select class="form-control category-select" id="exampleFormControlSelect1" name="rolUsuario">
                <option value="{{rolUsuario}}">{{rolUsuario}}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <br>
            <button class="btn btn-lg btn-primary btn-block" id="aplicarRegistro" type="submit">Actualizar</button>

            </div>

        </div>

</form>

{{/empleado}}
{{^empleado}}
Error empleado no encontrado
{{/empleado}}
{{> footer}}