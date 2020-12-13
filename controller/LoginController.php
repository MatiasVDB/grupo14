<?php

include_once("helper/Configuration.php");

class LoginController
{
    private LoginModel $loginModel;
    private Render $render;


    public function __construct(LoginModel $loginModel, Render $render)
    {
        $this->loginModel = $loginModel;
        $this->render = $render;
    }

    public function index(){

        echo $this->render->render("view/loginView.php");
    }


    public function procesarLogin(){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        if($this->loginModel->validarLogin($email,$password)){

            $mensaje["login"] = "Login exitoso";


            header("Location: ../main");
        }

        else{

            $mensaje["login"] = "Mail incorrecto o contraseña erronea";

            echo $this->render->render("view/loginView.php", $mensaje);
        }

    }

}