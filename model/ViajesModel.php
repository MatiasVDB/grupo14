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



    public function modificarViaje($id,$origen,$destino, $fechaFinalizacion, $fechaInicio, $tiempoReal, $ETA, $ETD, $kilometrosFinal, $kilometrosActuales, $combustibleFinal, $combustibleConsumido, $idVehiculo, $tipoDocumentoChofer, $numeroDocumentoChofer, $cuitCliente, $idArrastrado){
        $sql = "update viaje set origen = '$origen', destino = '$destino', fechaFinalizacion = '$fechaFinalizacion', fechaInicio = '$fechaInicio',  tiempoReal = '$tiempoReal', ETA = '$ETA', ETD = '$ETD', kilometrosFinal = '$kilometrosFinal', kilometrosActuales = '$kilometrosActuales',combustibleFinal = '$combustibleFinal', combustibleConsumido = '$combustibleConsumido',idVehiculo = '$idVehiculo', tipoDocumentoChofer = '$tipoDocumentoChofer', numeroDeDocumentoChofer='$numeroDocumentoChofer', cuitCliente='$cuitCliente', idArrastrado='$idArrastrado'  where id = '$id'";

        return $this->database->query($sql);
    }

    public function createViaje($origen, $destino,  $fechaInicio, $fechaFinalizacion, $ETA, $ETD, $kilometrosActuales, $kilometrosFinal, $combustibleFinal, $combustibleConsumido, $idVehiculo, $idArrastrado){
        $sql = "insert into VIAJE(origen, destino, fechaInicio, fechaFinalizacion, tiempoReal, ETA, ETD, kilometrosActuales, kilometrosFinal, combustibleFinal, combustibleConsumido, idVehiculo, tipoDocumentoChofer, numeroDeDocumentoChofer, cuitCliente, idArrastrado)
        values ('$origen','$destino', '$fechaInicio','$fechaFinalizacion', '$ETA', '$ETD', '$kilometrosActuales', '$kilometrosFinal', '$combustibleFinal', '$combustibleConsumido', '$idVehiculo', '$idArrastrado')";

        $this->database->execute($sql);
    }

    public function eliminar($id)
    {
        $sql = "delete from viaje where id = '$id'";

        return $this->database->query($sql);
    }
}