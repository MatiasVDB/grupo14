<?php


class ArrastradosModel
{

    private MySqlDatabase $database;

    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }

    public function getArrastrados(){

        $sql = "SELECT * FROM ARRASTRADO";
        return $this->database->query($sql);
    }


    public function getArrastradoPorPatenteNumeroDeChasis($patente, $numeroDeChasis){


        return $this->database->query("SELECT * FROM ARRASTRADO where patente = '$patente' and numeroDeChasis = '$numeroDeChasis' ");
    }

    public function getArrastrado($id)
    {
        return $this->database->query("SELECT * FROM ARRASTRADO where id = '$id' ");

    }

    public function modificarArrastrado($id, $tipo){
        $sql = "update ARRASTRADO set tipo = '$tipo' where id = '$id'";

        return $this->database->execute($sql);
    }

    public function eliminarArrastrado($id)
    {
        $sql = "delete from ARRASTRADO where id = '$id'";

        return $this->database->query($sql);
    }


    public function setArrastrado($patente, $numeroDeChasis, $inputTipo){
        $sql = "INSERT INTO ARRASTRADO (patente, numeroDeChasis, tipo) 
        VALUES ('$patente', '$numeroDeChasis', '$inputTipo')";

        return $this->database->execute($sql);
    }

}