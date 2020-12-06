<?php

class RegisterModel
{
    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function validarQueElEmailIngresadoNoEsteRegistrado($emailParaValidar){

        $emailValido = false;

       $query = $this->database->query("SELECT mail FROM USUARIO where mail = '$emailParaValidar'");

       if (count($query) == 0 ){

           $emailValido = true;
       }

       return $emailValido;

    }

    public function ingresarUsuarioALaBD($tipoDeDocumento, $numeroDeDocumento,$nombre, $password, $fechaDeNacimiento, $email){

        if($this->validarQueElEmailIngresadoNoEsteRegistrado($email))

            $sql = "insert into USUARIO(tipoDeDocumento, numeroDeDocumento, nombre, password, fechaDeNacimiento, mail, rolUsuario)
            values ('$tipoDeDocumento','$numeroDeDocumento','$nombre','$password','$fechaDeNacimiento','$email',null)";

            $this->database->query($sql);


    }
}