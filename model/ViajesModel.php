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

    public function modificarViaje($id,$origen,$destino, $fechaFinalizacion, $fechaInicio, $fechaCarga, $tiempoReal, $ETA, $ETD, $kilometrosFinal, $kilometrosActuales, $combustibleFinal, $combustibleConsumido, $patenteVehiculo, $chasisVehiculo){
        $sql = "update viaje set origen = '$origen', destino = '$destino', fechaFinalizacion = '$fechaFinalizacion', fechaInicio = '$fechaInicio', fechaCarga ='$fechaCarga', tiempoReal = '$tiempoReal', ETA = '$ETA', ETD = '$ETD', kilometrosFinal = '$kilometrosFinal', kilometrosActuales = '$kilometrosActuales',combustibleFinal = '$combustibleFinal', combustibleConsumido = '$combustibleConsumido',patenteVehiculo = '$patenteVehiculo', chasisVehiculo = '$chasisVehiculo' where id = '$id'";

        return $this->database->query($sql);
    }

    public function createViaje($origen,$destino, $fechaFinalizacion, $fechaInicio, $fechaCarga, $tiempoReal, $ETA, $ETD, $kilometrosFinal, $kilometrosActuales, $combustibleFinal, $combustibleConsumido, $patenteVehiculo, $chasisVehiculo){
        $sql = "insert into viaje( origen, destino, fechaFinalizacion, fechaInicio, fechaCarga, tiempoReal, ETA, ETD, kilometrosFinal, kilometrosActuales, combustibleFinal, combustibleConsumido, patenteVehiculo,chasisVehiculo)
        values ('$origen','$destino', '$fechaFinalizacion', '$fechaInicio', '$fechaCarga', '$tiempoReal', '$ETA', '$ETD', '$kilometrosFinal', '$kilometrosActuales', '$combustibleFinal', '$combustibleConsumido', '$patenteVehiculo', '$chasisVehiculo')";

        return $this->database->queryInsert($sql);
    }

    public function eliminar($id)
    {
        $sql = "delete from viaje where id = '$id'";

        return $this->database->query($sql);
    }
}