<?php

include_once ("helper/Configuration.php");
class MantenimientoModel
{
 private MySqlDatabase $database;


    public function __construct(MySqlDatabase $database)
    {
        $this->database = $database;
    }


}

