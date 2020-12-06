{{> header}}
{{#cliente}}
<form action="../procesarActualizacionCliente" class="form-signin col-md-8 align-middle" method="post">

    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Actualización de Cliente</h1>

    <br>

    <h6> CUIT {{CUIT}}</h6>



    <div class="form-row">

        <div class="form-group col-md-4">

            <input type="hidden" name="cuit" value="{{CUIT}}">


            <label for="inputDenominacion" >Denominacion</label>
            <input name="denominacion" type="text" id="inputDenominacion" class="form-control" placeholder="Denominacion"
                   value="{{denominacion}}" required>

        </div>

        <div class="form-group col-md-4">

            <label for="inputEmail" >Correo electrónico</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico"
                   value="{{email}}" required autofocus>

        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-4">

            <label for="date-input" id="contacto1">Contacto 1</label>


            <input name="contacto1" class="form-control" type="text" value="{{contacto1}}"
                   id="date-input">

        </div>

        <div class="form-group col-md-4">

            <label for="date-input" id="contacto2">Contacto 2</label>


            <input name="contacto2" class="form-control" type="text" value="{{contacto2}}"
                   id="date-input">

        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-4">

            <label for="date-input" id="telefono">Telefono</label>


            <input name="telefono" class="form-control" type="text" value="{{telefono}}"
                   id="date-input">

        </div>

        <div class="form-group col-md-4">

            <label for="date-input" id="direccion">Direccion</label>


            <input name="direccion" class="form-control" type="text" value="{{direccion}}"
                   id="date-input">

        </div>


    </div>
    <button class="btn btn-lg btn-primary btn-block" id="aplicarRegistro" type="submit">Actualizar</button>

</form>

{{/cliente}}
{{^cliente}}
Error cliente no encontrado
{{/cliente}}
{{> footer}}