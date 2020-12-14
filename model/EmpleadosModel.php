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

        return $this->database->query(" select * from usuario left join rol on usuario.rolUsuario = rol.id;");

    }

    public function getEmpleado($numeroDocumento){
        $sql = "SELECT * FROM USUARIO where numeroDeDocumento = '$numeroDocumento'";

        return $this->database->query($sql);
    }

    public function getEmpleadoDNI($numeroDocumento){
        $sql = "SELECT * FROM USUARIO where  numeroDeDocumento = '$numeroDocumento'";

        return $this->database->query($sql);
    }


    public function getEmpleadoConNivelDeRol($numeroDeDocumento){

        return $this->database->query("select * from usuario left join rol on usuario.rolUsuario  = rol.id where numeroDeDocumento = '$numeroDeDocumento'");

    }

    public function getChoferes(){

        return $this->database->query("SELECT * FROM USUARIO where rolUsuario = 1");

    }

    public function getMecanicos(){

        return $this->database->query("SELECT * FROM USUARIO where rolUsuario = 3");

    }
    public function getTipoDocumento($numeroDNI){

        return $this->database->query("SELECT tipoDeDocumento FROM USUARIO where numeroDeDocumento = $numeroDNI");

    }

    public function getEmpleadosPorRol($numeroDNI, $rol){
        return $this->database->query("SELECT * FROM USUARIO where numeroDeDocumento = '$numeroDNI' and rolUsuario = '$rol'");
    }



    public function modificarEmpleado( $numeroDeDocumento, $nombre, $fechaDeNacimiento, $email, $rolUsuario){
        $sql = "update  USUARIO set nombre = '$nombre', fechaDeNacimiento = '$fechaDeNacimiento', mail = '$email', rolUsuario = '$rolUsuario' where  numeroDeDocumento = '$numeroDeDocumento'";

        $this->database->execute($sql);
    }

    public function eliminar($numeroDocumento)
    {
        $sql = "delete from usuario where  numeroDeDocumento = '$numeroDocumento'";

        return $this->database->query($sql);
    }
}