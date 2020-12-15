<?php

include_once("helper/Configuration.php");

class ClientesModel
{
    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getClientes(){
        return $this->database->query("SELECT * FROM CLIENTE");
    }

    public function getCliente($cuit){
        $sql = "SELECT * FROM CLIENTE where CUIT = '$cuit'";

        return $this->database->query($sql);
    }

    public function modificarCliente($cuit, $denominacion, $contacto1, $contacto2, $telefono, $direccion, $email){
        $sql = "update CLIENTE set denominacion = '$denominacion', contacto1 = '$contacto1', contacto2 = '$contacto2', telefono = '$telefono', direccion = '$direccion', email = '$email' where cuit = '$cuit'";

         $this->database->execute($sql);
    }

    public function createCliente($cuit, $denominacion, $email , $contacto1, $contacto2, $telefono, $direccion){
        $sql = "insert into CLIENTE(CUIT, denominacion, email, contacto1, contacto2, telefono, direccion)
        values ('$cuit', '$denominacion', '$email', '$contacto1', '$contacto2', '$telefono', '$direccion')";

         $this->database->execute($sql);
    }

    public function eliminar($cuit)
    {
        $sql = "delete from CLIENTE where cuit = '$cuit'";

        return $this->database->query($sql);
    }
}