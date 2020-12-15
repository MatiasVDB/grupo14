<?php


include_once("helper/Configuration.php");
class LoginModel
{

    private MySqlDatabase $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function validarLogin($email, $pass)
    {
        $loginValido = false;

        $sql = "select * from USUARIO where mail = '$email' and password = '$pass'";

       $query = $this->database->query($sql);


        if (count($query) == 1 ) {

            switch ($query[0]['rolUsuario']){

                case 0:

                    session_start();
                    $_SESSION['logueado'] = 0;
                    $_SESSION['username'] = $email;

                    break;

                case 1:
                    session_start();
                    $_SESSION['logueado'] = 1;
                    $_SESSION['username'] = $email;
                    $_SESSION['numeroDeDocumento'] = $query[0]['numeroDeDocumento'];

                    break;

                case 2:
                    session_start();
                    $_SESSION['logueado'] = 2;
                    $_SESSION['username'] = $email;


                    break;

                case 3:
                    session_start();
                    $_SESSION['logueado'] = 3;
                    $_SESSION['username'] = $email;

                    break;

                case 4:
                    session_start();
                    $_SESSION['logueado'] = 4;
                    $_SESSION['username'] = $email;

                    break;

                default: return $loginValido;
            }



            $loginValido = true;

        }


        return $loginValido;

    }

}
?>

