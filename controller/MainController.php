<?php

include_once("helper/Configuration.php");
class MainController
{

    private MainModel $mainModel;
    private Render $render;


    public function __construct(MainModel $mainModel, Render $render)
    {
        $this->mainModel = $mainModel;
        $this->render = $render;
    }

    public function index()
    {
    if (isset($_SESSION['logueado'])){

        echo $this->render->render("view/mainView.php");

    }

    else{

        header("Location: home");
    }
    }

    public function mostrarNombreDelUsuario()
    {
        $mail = $_POST["email"];


        $resultado = $this->mainModel->getUsuarioPorMail($mail);

        $data["mensajeBienvenida"] = "Bienvenido " . $resultado[0]["nombre"];
        echo $this->render->render("view/mainView.php", $data);


    }

    public function cerrarSession() {

        session_start();

    echo $_SESSION['logueado'];
        if (isset($_SESSION['logueado'])){

            session_destroy();

            header("Location: ../home");
        }
    }
}