<?php


class MySqlDatabase
{

    private $connexion;

    public function __construct($servername, $username, $password, $dbname){
        $this->connexion  = mysqli_connect($servername, $username, $password, $dbname)
        or die("Connection failed: " . mysqli_connect_error());
    }

    public function query($sql){
        $result = mysqli_query($this->connexion, $sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function execute($sql){
        mysqli_query($this->connexion, $sql);
    }

    public static function createDatabaseFromConfig(Configuration $config){
        return new MySqlDatabase(
            $config->get( "database","servername"),
            $config->get("database","username"),
            $config->get("database","password"),
            $config->get("database","dbname")
        );
    }
}