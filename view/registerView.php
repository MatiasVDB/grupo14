<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Registro</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body class="text-center">



<div class="formularioContainer form-signin">

    <h5 id="ingresar" class="mb-3 registerTxt ">Registro de Cliente</h5>

    <form action="register/procesarFormulario" class="form-signin" method="post">

        <svg  width="1em" height="1em" viewBox="0 0 16 16" class="mb-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg>
        <h1 id="ingresar" class="h3 mb-3 font-weight-normal">Registrarse</h1>

        <div class="form-row">
            <div class="form-group col-md-12">
                <input name="nombre" type="text" id="inputNombre" class="form-control" placeholder="Nombre y apellido" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-12">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <input name="dni" type="number" id="dni" class="form-control" placeholder="Documento" required>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="date-input" id="fechaNacimiento">Fecha de nacimiento</label>
                <input name="fechaDeNacimiento" class="form-control" type="date" value="" id="date-input" >
            </div>
        </div>


        <button class="btn btn-lg btn-primary btn-block mt-4" id="aplicarRegistro" type="submit">Registrarse</button>

        <p class="mt-5 mb-3 text-muted ">&copy; Trucks Road 2020</p>

    </form>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

