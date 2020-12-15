<?php


class ArrastradosController
{

    private ArrastradosModel $arrastradosModel;
    private Render $render;

    public function __construct(ArrastradosModel $arrastradosModel,  Render $render)
    {
        $this->arrastradosModel = $arrastradosModel;
        $this->render = $render;
    }


    public function index()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            $data["arrastrados"] = $this->arrastradosModel->getArrastrados();

            echo $this->render->render("view/arrastradosView.php", $data);

        }else{

            header("Location: main");
        }
    }


    public function registrarArrastrado(){

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            $data = array("arrastrados" => $this->arrastradosModel->getArrastrados());
            echo $this->render->render("view/registerArrastrado.php", $data);

        }

        else{
            header("Location: http://localhost/grupo14/main");
        }

    }

    public function crearArrastrado(){

        $patente = $_POST['patente'];
        $nroChasis = $_POST['chasis'];
        $inputTipo = $_POST['tipo'];

        $mensaje["error"] = "*El arrastrado ingresado, ya se encuentra registrado.";
        if(count($this->arrastradosModel->getArrastradoPorPatenteNumeroDeChasis($patente, $nroChasis)) == 0){

            $this->arrastradosModel->setArrastrado($patente, $nroChasis, $inputTipo);
            header("Location: ../arrastrados");
        }

        else{

            echo $this->render->render("view/registerArrastrado.php", $mensaje);

        }

    }

    public function detalleArrastrado()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {
          $id = $_GET["id"];

        $data = array("arrastrado" => $this->arrastradosModel->getArrastrado($id));

            echo $this->render->render("view/arrastradoModificarView.php", $data);
        }else{
            header("Location: /grupo14/main");
        }
    }

    public function actualizarArrastrado()
    {
        $id = $_POST['id'];
        $tipo = $_POST['tipo'];

        echo ("$id, $tipo");

        $this->arrastradosModel->modificarArrastrado($id, $tipo);

        header("Location: ../arrastrados");


    }

    public function eliminarArrastrado()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4 ) {

            $id = $_GET['id'];

            $this->arrastradosModel->eliminarArrastrado($id);

            header("Location: ../arrastrados");

            exit();
        }else{
            header("Location: /grupo14/main");
        }

    }



}