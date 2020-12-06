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
    public function getArrastrado($patente, $nroChasis){
        $sql = "SELECT * FROM ARRASTRADO where patente = '$patente' and numeroDeChasis = '$nroChasis'";

        return $this->database->query($sql);
    }

    public function modificarArrastrado($patente, $numeroDeChasis, $tipoCarga, $refrigeracionCarga, $pesoNetoCarga, $hazardCarga){
        $sql = "update ARRASTRADO set pesoNetoCarga = '$pesoNetoCarga', hazardCarga = '$hazardCarga', tipoCarga = '$tipoCarga',refrigeracionCarga = '$refrigeracionCarga' where patente = '$patente' and numeroDeChasis = '$numeroDeChasis'";

        return $this->database->query($sql);
    }

    public function eliminarArrastrado($patente, $numeroDeChasisChasis)
    {
        $sql = "delete from ARRASTRADO where patente = '$patente' and numeroDeChasis = '$numeroDeChasisChasis'";

        return $this->database->query($sql);
    }

    public function agregarArrastrado($patente, $numeroDeChasis, $pesoNetoCarga, $hazardCarga, $tipoCarga, $refrigeracionCarga){
        $sql = "INSERT INTO ARRASTRADO (patente, numeroDeChasis, pesoNetoCarga, hazardCarga, tipoCarga, refrigeracionCarga) 
VALUES ('$patente', $numeroDeChasis, '$pesoNetoCarga', '$hazardCarga', '$tipoCarga', '$refrigeracionCarga')";

        return $this->database->query($sql);
    }

}