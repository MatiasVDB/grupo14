{{> header}}
{{#cliente}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Actualización de Cliente</h5>

    <p> CUIT Cliente {{CUIT}}</p>

<form action="../procesarActualizacionCliente" class="form-signin col-md-8 formulario" method="post">

    <div class="form-row">

        <div class="form-group col-md-6">

            <input type="hidden" name="cuit" value="{{CUIT}}">


            <label for="inputDenominacion" >Denominación</label>
            <input name="denominacion" type="text" id="inputDenominacion" class="form-control" placeholder="Denominacion"
                   value="{{denominacion}}" required>

        </div>

        <div class="form-group col-md-6">

            <label for="inputEmail" >Correo electrónico</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico"
                   value="{{email}}" required autofocus>

        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">

            <label for="date-input" id="contacto1">Contacto 1</label>


            <input name="contacto1" class="form-control" type="text" value="{{contacto1}}"
                   id="date-input">

        </div>

        <div class="form-group col-md-6">

            <label for="date-input" id="contacto2">Contacto 2</label>


            <input name="contacto2" class="form-control" type="text" value="{{contacto2}}"
                   id="date-input">

        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">

            <label for="date-input" id="telefono">Teléfono</label>


            <input name="telefono" class="form-control" type="text" value="{{telefono}}"
                   id="date-input">

        </div>

        <div class="form-group col-md-6">

            <label for="date-input" id="direccion">Dirección</label>


            <input name="direccion" class="form-control" type="text" value="{{direccion}}"
                   id="date-input">

        </div>


    </div>
    <button class="btn  btn-primary" id="aplicarRegistro" type="submit">Actualizar</button>

</form>

</div>

{{/cliente}}
{{^cliente}}
Error cliente no encontrado
{{/cliente}}
{{> footer}}