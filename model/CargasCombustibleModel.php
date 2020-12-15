<?php


class CargasCombustibleModel
{

    private MySqlDatabase $database;

    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }

    public function getCargasCombustible(){
        return $this->database->query("SELECT * FROM combustible");
    }



    public function getCargasCombustibleViaje($idViaje)
    {
        return $this->database->query("SELECT * FROM combustible where idViaje = '$idViaje' ");

    }

    /*
    public function modificarArrastrado($id, $carga){
        $sql = "update ARRASTRADO set id_carga = '$carga' where id = '$id'";

        return $this->database->query($sql);
    }

    public function eliminarArrastrado($id)
    {
        $sql = "delete from ARRASTRADO where id = '$id'";

        return $this->database->query($sql);
    }
    */

    public function setCargaCombustible($idViaje, $numeroDeDocumento_chofer, $lugar, $cantidad,$importe, $kilometrosRecorridos){
        $sql = "INSERT INTO combustible (idviaje, numeroDeDocumento_chofer, lugar, cantidad,importe, kilometrosRecorridos ) 
        VALUES ('$idViaje', '$numeroDeDocumento_chofer', '$lugar', '$cantidad','$importe', '$kilometrosRecorridos')";
        return $this->database->query($sql);
    }

}