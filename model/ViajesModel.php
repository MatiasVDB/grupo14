<?php

include_once("helper/Configuration.php");

class ViajesModel
{
    private MySqlDatabase $database;
    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getViajes(){

        $sql = "SELECT * FROM VIAJE";
        return $this->database->query($sql);

    }

    public function getViajesConArrastradosYCargas(){

        $sql = "select * from VIAJE join ARRASTRADO on viaje.iDArrastrado = arrastrado.id 
    join CARGA where carga.id = arrastrado.id_carga";

        return $this->database->query($sql);
    }

    public function getViaje($id){
        $sql = "SELECT * FROM viaje where id = '$id'";

        return $this->database->query($sql);
    }



    public function modificarViaje($id,$origen,$destino, $fechaFinalizacion, $fechaInicio, $ETA, $ETD, $kilometrosFinal, $kilometrosActuales, $combustibleFinal, $combustibleConsumido, $idVehiculo, $idArrastrado){
        $sql = "update viaje set origen = '$origen', destino = '$destino', fechaFinalizacion = '$fechaFinalizacion', fechaInicio = '$fechaInicio', ETA = '$ETA', ETD = '$ETD', kilometrosFinal = '$kilometrosFinal', kilometrosActuales = '$kilometrosActuales',combustibleFinal = '$combustibleFinal', combustibleConsumido = '$combustibleConsumido',idVehiculo = '$idVehiculo',   idArrastrado='$idArrastrado'  where id = '$id'";

        return $this->database->query($sql);
    }

    public function createViaje($origen, $destino,  $fechaInicio, $fechaFinalizacion, $ETA, $ETD, $kilometrosActuales, $kilometrosFinal, $combustibleFinal, $combustibleConsumido, $idVehiculo, $idArrastrado){
        $sql = "insert into VIAJE(origen, destino, fechaInicio, fechaFinalizacion, ETA, ETD, kilometrosActuales, kilometrosFinal, combustibleFinal, combustibleConsumido, idVehiculo , idArrastrado)
        values ('$origen','$destino', '$fechaInicio','$fechaFinalizacion', '$ETA', '$ETD', '$kilometrosActuales', '$kilometrosFinal', '$combustibleFinal', '$combustibleConsumido', '$idVehiculo', '$idArrastrado')";

        $this->database->execute($sql);
    }

    public function eliminar($id)
    {
        $sql = "delete from viaje where id = '$id'";

        return $this->database->query($sql);
    }
}