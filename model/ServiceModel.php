<?php

include_once ("helper/Configuration.php");
class ServiceModel
{
    private MySqlDatabase $database;

    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }

    public function getServices(){

        return $this->database->query("SELECT * FROM SERVICE");
    }

    public function getServicesConTractoresyChoferes(){

    return $this->database->query("select * from SERVICE inner join tractor on service.id_tractor = tractor.id
    inner join Usuario on service.numeroDeDocumento_mecanico = Usuario.numeroDeDocumento");
    }

    public function getServiceConTractoresyChoferes($codigo){

        return $this->database->query("select * from SERVICE inner join tractor on service.id_tractor = tractor.id
    inner join Usuario on service.numeroDeDocumento_mecanico = Usuario.numeroDeDocumento where codigo = '$codigo'");
    }

    public function getService($codigo){

      return  $this->database->query("SELECT * FROM SERVICE WHERE codigo = '$codigo'");

    }

    public function registrarService($codigo, $id_tractor, $repuestos, $tipoDeService, $numeroDeDocumentoMecanico){

        $this->database->execute("insert into SERVICE(codigo, id_tractor, repuestos, tipoDeService, numeroDeDocumento_mecanico)
        values ('$codigo', '$id_tractor', '$repuestos', '$tipoDeService', '$numeroDeDocumentoMecanico')");



    }

    public function deleteService($codigo){

        $this->database->execute("delete from SERVICE where codigo = '$codigo'");



    }


}