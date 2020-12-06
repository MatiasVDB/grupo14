<?php

include_once("helper/Configuration.php");

class ProformaModel
{
    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function validarQueElNumeroDeProformaIngresadoNoEsteRegistrado($numero){

        $numeroValido = false;

        $sql = "select numero from PROFORMA where numero = '$numero'";

       $query = $this->database->query($sql);

        if (count($query) == 0 ){

            $numeroValido = true;
        }

        return $numeroValido;

    }


    public function setDatos($numero, $fecha, $CUIT, $viaje, $carga, $tipoDNI, $numeroDNI){

        if ($this->validarQueElNumeroDeProformaIngresadoNoEsteRegistrado($numero))

        $sql = "INSERT INTO PROFORMA (numero, fecha, CUIT_cliente, id_viaje, id_carga, tipoDeDocumento_chofer, numeroDeDocumento_chofer) 
        VALUES ('$numero', '$fecha', '$CUIT', '$viaje', '$carga', '$tipoDNI', '$numeroDNI')";

        $this->database->query($sql);
    }



}