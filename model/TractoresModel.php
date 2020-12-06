<?php

include_once("helper/Configuration.php");
class TractoresModel
{

    private MySqlDatabase $database;

    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }

    public function getTractores(){
        return $this->database->query("SELECT * FROM TRACTOR");
    }
    public function getTractor($id){
        $sql = "SELECT * FROM TRACTOR where id = '$id' ";

        return $this->database->query($sql);
    }

    public function createTractor($marca, $modelo, $patente, $nroMotor, $nroChasis, $kilometros, $anoDeFabricacion){

            $sql = "insert into TRACTOR(marca, modelo, patente, numeroDeMotor, numeroDeChasis, kilometros, añoDeFabricacion)
                values('$marca', '$modelo','$patente','$nroMotor','$nroChasis','$kilometros','$anoDeFabricacion')";

            return $this->database->query($sql);

        }

    public function modificarTractor($id, $marca, $modelo,  $nroMotor, $kilometros, $anoDeFabricacion){
        $sql = "update TRACTOR set marca = '$marca', modelo = '$modelo', numeroDeMotor = '$nroMotor',kilometros = '$kilometros', añoDeFabricacion = '$anoDeFabricacion' where id = '$id'";

        return $this->database->query($sql);
    }

    public function eliminar($id)
    {
        $sql = "delete from TRACTOR where id = '$id'";

        return $this->database->query($sql);
    }

}