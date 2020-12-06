<?php


class DatosProformaModel
{

    private MySqlDatabase $database;

    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }



}