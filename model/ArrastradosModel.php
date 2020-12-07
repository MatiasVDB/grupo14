<?php


class ArrastradosModel
{

    private MySqlDatabase $database;

    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }

    public function getArrastrados(){
        return $this->database->query("SELECT * FROM ARRASTRADO");
    }
    public function getArrastrado($id){
        $sql = "SELECT * FROM ARRASTRADO where id = '$id' ";

        return $this->database->query($sql);
    }

    public function modificarArrastrado($id, $tipoCarga, $refrigeracionCarga, $pesoNetoCarga, $hazardCarga,  $carga){
        $sql = "update ARRASTRADO set pesoNetoCarga = '$pesoNetoCarga', hazardCarga = '$hazardCarga', tipoCarga = '$tipoCarga',refrigeracionCarga = '$refrigeracionCarga', idCarga = '$carga' where id = '$id' ";

        return $this->database->query($sql);
    }

    public function eliminarArrastrado($id)
    {
        $sql = "delete from ARRASTRADO where id = '$id'";

        return $this->database->query($sql);
    }

    public function agregarArrastrado($patente, $numeroDeChasis, $pesoNetoCarga, $hazardCarga, $tipoCarga, $refrigeracionCarga, $carga){
        $sql = "INSERT INTO ARRASTRADO (patente, numeroDeChasis, pesoNetoCarga, hazardCarga, tipoCarga, refrigeracionCarga, idCarga) 
VALUES ('$patente', $numeroDeChasis, '$pesoNetoCarga', '$hazardCarga', '$tipoCarga', '$refrigeracionCarga', '$carga')";

        return $this->database->query($sql);
    }

}