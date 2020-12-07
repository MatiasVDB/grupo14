<?php

include_once("helper/Configuration.php");

class EmpleadosModel
{
    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getEmpleados(){

        return $this->database->query("SELECT * FROM USUARIO");
    }

    public function getEmpleadosConNivelDeRol(){

        return $this->database->query("select * from rol join usuario where rol.id = usuario.rolUsuario");

    }

    public function getEmpleado($tipoDocumento, $numeroDocumento){
        $sql = "SELECT * FROM USUARIO where tipoDeDocumento = '$tipoDocumento' and numeroDeDocumento = '$numeroDocumento'";

        return $this->database->query($sql);
    }


    public function getEmpleadoConNivelDeRol($tipoDeDocumento, $numeroDeDocumento){

        return $this->database->query("select * from rol join usuario where rol.id = usuario.rolUsuario and tipoDeDocumento = '$tipoDeDocumento' and numeroDeDocumento = '$numeroDeDocumento'");

    }

    
    public function getChoferes(){

        return $this->database->query("SELECT * FROM USUARIO where rolUsuario = 1");

    }

    public function getEmpleadosPorRol($tipoDNI, $numeroDNI, $rol){
        return $this->database->query("SELECT * FROM USUARIO where tipoDeDocumento = '$tipoDNI' and numeroDeDocumento = '$numeroDNI' and rolUsuario = '$rol'");
    }



    public function modificarEmpleado($tipoDeDocumento, $numeroDeDocumento, $nombre, $fechaDeNacimiento, $email, $rolUsuario){
        $sql = "update  USUARIO set nombre = '$nombre', fechaDeNacimiento = '$fechaDeNacimiento', mail = '$email', rolUsuario = '$rolUsuario' where tipoDeDocumento = '$tipoDeDocumento' and numeroDeDocumento = '$numeroDeDocumento'";

        return $this->database->query($sql);
    }

    public function eliminar($tipoDocumento, $numeroDocumento)
    {
        $sql = "delete from usuario where tipoDeDocumento = '$tipoDocumento' and numeroDeDocumento = '$numeroDocumento'";

        return $this->database->query($sql);
    }
}