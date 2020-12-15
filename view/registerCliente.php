{{> header}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt ">Registro de Cliente</h5>

<form action="./registrarCliente" class="form-signin col-md-8 formulario" method="post">

    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="CUIT" >CUIT</label>
            <input name="cuit" type="number" id="cuit" class="form-control" placeholder="CUIT" min="0" required>
        </div>

        <div class="form-group col-md-6">
            <label for="inputDenominacion" >Denominación</label>
            <input name="denominacion" type="text" id="inputDenominacion" class="form-control" placeholder="Denominacion" required>
        </div>

    </div>

    <div class="form-row">

    <div class="form-group col-md-12">
        <label for="inputEmail" >Correo electrónico</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required>
    </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-6">

            <label for="date-input" id="contacto1">Contacto 1</label>


            <input name="contacto1" class="form-control" type="tel"
                   id="date-input">

        </div>

        <div class="form-group col-md-6">

            <label for="date-input" id="contacto2">Contacto 2</label>


            <input name="contacto2" class="form-control" type="tel">

        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">

            <label for="date-input" id="telefono">Teléfono</label>


            <input name="telefono" class="form-control" type="tel"
                   id="date-input">

        </div>

        <div class="form-group col-md-6">
            <label for="date-input" id="direccion">Dirección</label>


            <input name="direccion" class="form-control" type="text"
                   id="date-input">
        </div>


    </div>
    <button class="btn btn-primary" id="aplicarRegistro" type="submit">Registrar</button>

</form>

</div>

{{> footer}}