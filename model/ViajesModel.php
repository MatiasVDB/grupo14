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

    public function getViaje($id){
        $sql = "SELECT * FROM viaje where id = '$id'";

        return $this->database->query($sql);
    }

    public function modificarViaje($id,$origen,$destino, $fechaFinalizacion, $fechaInicio, $fechaCarga, $tiempoReal, $ETA, $ETD, $kilometrosFinal, $kilometrosActuales, $combustibleFinal, $combustibleConsumido, $idVehiculo, $tipoDocumentoChofer, $numeroDocumentoChofer, $cuitCliente, $idArrastrado){
        $sql = "update viaje set origen = '$origen', destino = '$destino', fechaFinalizacion = '$fechaFinalizacion', fechaInicio = '$fechaInicio', fechaCarga ='$fechaCarga', tiempoReal = '$tiempoReal', ETA = '$ETA', ETD = '$ETD', kilometrosFinal = '$kilometrosFinal', kilometrosActuales = '$kilometrosActuales',combustibleFinal = '$combustibleFinal', combustibleConsumido = '$combustibleConsumido',idVehiculo = '$idVehiculo', tipoDocumentoChofer = '$tipoDocumentoChofer', numeroDeDocumentoChofer='$numeroDocumentoChofer', cuitCliente='$cuitCliente', idArrastrado='$idArrastrado'  where id = '$id'";

        return $this->database->query($sql);
    }

    public function createViaje($origen, $destino, $fechaFinalizacion, $fechaInicio, $fechaCarga, $tiempoReal, $ETA, $ETD, $kilometrosActuales, $kilometrosFinal, $combustibleFinal, $combustibleConsumido, $idVehiculo, $tipoDocumentoChofer, $numeroDeDocumentoChofer, $cuitCliente, $idArrastrado){
        $sql = "insert into VIAJE(origen, destino, fechaFinalizacion, fechaInicio, fechaCarga, tiempoReal, ETA, ETD, kilometrosActuales, kilometrosFinal, combustibleFinal, combustibleConsumido, idVehiculo, tipoDocumentoChofer, numeroDeDocumentoChofer, cuitCliente, idArrastrado)
        values ('$origen','$destino', '$fechaFinalizacion', '$fechaInicio', '$fechaCarga', '$tiempoReal', '$ETA', '$ETD', '$kilometrosActuales', '$kilometrosFinal', '$combustibleFinal', '$combustibleConsumido', '$idVehiculo', '$tipoDocumentoChofer', '$numeroDeDocumentoChofer', '$cuitCliente', '$idArrastrado')";

        return $this->database->query($sql);
    }

    public function eliminar($id)
    {
        $sql = "delete from viaje where id = '$id'";

        return $this->database->query($sql);
    }
}