<?php

include_once("helper/Configuration.php");
class MainModel
{
    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function getUsuarioPorMail($mail){

        $sql = "SELECT * FROM USUARIO WHERE mail = '".$mail."'";
        return $this->database->query($sql);

    }
}