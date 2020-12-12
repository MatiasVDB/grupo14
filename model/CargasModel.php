<?php

include_once("helper/Configuration.php");

class CargasModel
{
    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getCargas(){
        return $this->database->query("SELECT * FROM CARGA");
    }

    public function getCarga($id){
        $sql = "SELECT * FROM CARGA where id = '$id'";

        return $this->database->query($sql);
    }

    public function modificarCarga($id, $tipo, $pesoNeto, $hazard, $imo, $reefer, $temperatura){
        $sql = "update CARGA set tipo = '$tipo', pesoNeto = '$pesoNeto', hazard = '$hazard', imo = '$imo', reefer = '$reefer', temperatura='$temperatura' where id = '$id'";

        return $this->database->execute($sql);
    }

    public function createCarga( $tipo, $pesoNeto, $hazard, $imo, $reefer, $temperatura){



        $sql = "insert into CARGA( tipo, pesoNeto, hazard, imo, reefer, temperatura)
        values ('$tipo', '$pesoNeto', '$hazard','$imo', '$reefer', '$temperatura')";

        return $this->database->execute($sql);
    }

    public function eliminar($id)
    {
        $sql = "delete from CARGA where id = '$id'";

        return $this->database->query($sql);
    }
}