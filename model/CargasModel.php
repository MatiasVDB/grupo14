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

    public function modificarCarga($id, $tipo, $pesoNeto, $hazard, $imoClass, $imoSclass, $reefer, $temperatura){
        $sql = "update CARGA set tipo = '$tipo', pesoNeto = '$pesoNeto', hazard = '$hazard', imoClass = '$imoClass', imoSclass = '$imoSclass', reefer = '$reefer', temperatura='$temperatura' where id = '$id'";

        return $this->database->query($sql);
    }

    public function createCarga($id, $tipo, $pesoNeto, $hazard, $imoClass, $imoSclass, $reefer, $temperatura){
        $sql = "insert into CARGA(id, tipo, pesoNeto, hazard, imoClass, imoSclass, reefer, temperatura)
        values ('$id', '$tipo', '$pesoNeto', '$hazard','$imoClass', '$imoSclass', '$reefer', '$temperatura')";

        return $this->database->queryInsert($sql);
    }

    public function eliminar($id)
    {
        $sql = "delete from CARGA where id = '$id'";

        return $this->database->query($sql);
    }
}