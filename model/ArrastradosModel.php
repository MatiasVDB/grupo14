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

    public function getArrastradosConTipoDeCarga(){

        return $this->database->query("SELECT * FROM ARRASTRADO JOIN CARGA WHERE carga.id = id_carga;");

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


    public function setArrastrado($patente, $numeroDeChasis, $carga){
        $sql = "INSERT INTO ARRASTRADO (patente, numeroDeChasis, id_carga) 
        VALUES ('$patente', $numeroDeChasis, '$carga')";

        return $this->database->query($sql);
    }

}