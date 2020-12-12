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

    public function getProformas(){

        return $this->database->query("SELECT * FROM PROFORMA");
    }

    public function getProforma($numero){

        return $this->database->query("select * from PROFORMA where numero = '$numero'");
    }


    public function setDatos($numero, $fecha, $CUIT, $viaje, $numeroDNI, $carga,$costeoKilometrosEsperado, $costeoCombustibleEsperado,
                             $costeoETDEsperado, $costeoETAEsperado, $costeoViaticosEsperado, $costeoPeajesPesajesEsperado, $costeoExtrasEsperado,
                                $costeoFEEEsperado, $costeoHazardEsperado, $costeoReeferEsperado){

        //if ($this->validarQueElNumeroDeProformaIngresadoNoEsteRegistrado($numero)){}

        $sql = "INSERT INTO PROFORMA (numero, fecha, CUIT_cliente, id_viaje, numeroDeDocumento_chofer,id_carga ,costeoEstimado_Kilometros, costeoEstimado_Combustible, costeoEstimado_ETD, costeoEstimado_ETA,
                                        costeoEstimado_Viaticos, costeoEstimado_Peajes_Pesajes, costeoEstimado_Extras, costeoEstimado_FEE, costeoEstimado_Hazard, costeoEstimado_Reefer) 
        VALUES ('$numero', '$fecha', '$CUIT', '$viaje', '$numeroDNI', '$carga','$costeoKilometrosEsperado', '$costeoCombustibleEsperado', '$costeoETDEsperado', '$costeoETAEsperado', '$costeoViaticosEsperado', '$costeoPeajesPesajesEsperado', 
                '$costeoExtrasEsperado', '$costeoFEEEsperado', '$costeoHazardEsperado', '$costeoReeferEsperado')";

        $this->database->execute($sql);
    }

    public function eliminar($numero)
    {
        $sql = "delete from proforma where  numero = '$numero'";

        return $this->database->execute($sql);
    }

}