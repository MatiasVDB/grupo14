<?php
include_once("helper/Configuration.php");

class EditarProformaModel
{
    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function buscarProformaPorID($idProforma){

        $sql = "select * from PROFORMA where numero = '$idProforma'";

        return $this->database->query($sql);


    }
}