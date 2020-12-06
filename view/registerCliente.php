{{> header}}
<form action="./registrarCliente" class="form-signin col-md-8 align-middle" method="post">

    <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Registro de Cliente</h1>


    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="CUIT" >CUIT</label>
            <input name="cuit" type="text" id="cuit" class="form-control" placeholder="CUIT" required>
        </div>

        <div class="form-group col-md-4">
            <label for="inputDenominacion" >Denominacion</label>
            <input name="denominacion" type="text" id="inputDenominacion" class="form-control" placeholder="Denominacion" required>
        </div>

        <div class="form-group col-md-4">
            <label for="inputEmail" >Correo electrónico</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-md-4">

            <label for="date-input" id="contacto1">Contacto 1</label>


            <input name="contacto1" class="form-control" type="text"
                   id="date-input">

        </div>

        <div class="form-group col-md-4">

            <label for="date-input" id="contacto2">Contacto 2</label>


            <input name="contacto2" class="form-control" type="text"
                   id="date-input">

        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-4">

            <label for="date-input" id="telefono">Telefono</label>


            <input name="telefono" class="form-control" type="tel"
                   id="date-input">

        </div>

        <div class="form-group col-md-4">
            <label for="date-input" id="direccion">Direccion</label>


            <input name="direccion" class="form-control" type="text"
                   id="date-input">
        </div>


    </div>
    <button class="btn btn-lg btn-primary btn-block" id="aplicarRegistro" type="submit">Registrar</button>

</form>

