<?php

include_once ("helper/Configuration.php");
class FechaServiceModel
{
    private MySqlDatabase $database;

    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }

    public function setFechaService($id_tractor, $horaService, $fechaService, $service_codigo){

        $this->database->execute("insert into FECHA_SERVICE(id_tractor, hora, fecha, codigo_service) value ('$id_tractor', '$horaService', '$fechaService', '$service_codigo' )");
    }

    public function getFechasServicesDeTractores($id_tractor){

        return $this->database->query("select * from FECHA_SERVICE where id_tractor = '$id_tractor'");
    }

    public function getFechaService($codigo_service){

        return $this->database->query("select hora, fecha from FECHA_SERVICE where codigo_service = '$codigo_service'");
    }




}