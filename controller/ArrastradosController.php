<?php


class ArrastradosController
{

    private ArrastradosModel $arrastradosModel;
    private Render $render;

    public function __construct(ArrastradosModel $arrastradosModel, Render $render)
    {
        $this->arrastradosModel = $arrastradosModel;
        $this->render = $render;
    }


    public function index()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4) {
            $data["arrastrados"] = $this->arrastradosModel->getArrastrados();
            echo $this->render->render("view/arrastradosView.php", $data);

        }else{

            header("Location: main");
        }
    }

    public function vistaActualizarArrastrado()
    {
        $patente = $_GET["patente"];
        $nroChasis = $_GET["chasis"];


        $data["arrastrado"] = $this->arrastradosModel->getArrastrado($patente, $nroChasis);
        echo $this->render->render("view/arrastradoModificarView.php", $data);

    }

    public function actualizarArrastrado()
    {

        $pesoNeto = $_POST['peso'];
        $hazard = $_POST['hazard'];
        $patente = $_POST['patente'];
        $tipoCarga = $_POST['tipo'];
        $nroChasis = $_POST['chasis'];
        $refrigeracion = $_POST['refrigeracion'];

        $data['datos'] = $this->arrastradosModel->modificarArrastrado($patente, $nroChasis, $tipoCarga, $refrigeracion, $pesoNeto, $hazard);

        header("Location: ../arrastrados");


    }

    public function eliminarArrastrado()
    {

        $patente = $_GET['patente'];
        $numeroChasis = $_GET['chasis'];

        $this->arrastradosModel->eliminarArrastrado($patente, $numeroChasis);

        header("Location: ../arrastrados");

        exit();


    }

    public function registerArrastrado()
    {
        $data["arrastrado"] = $this->arrastradosModel->getArrastrados();
        echo $this->render->render("view/registerArrastrado.php", $data);

    }

    public function registrarArrastrado(){

        $pesoNeto = $_POST['peso'];
        $hazard = $_POST['hazard'];
        $patente = $_POST['patente'];
        $tipoCarga = $_POST['tipo'];
        $nroChasis = $_POST['chasis'];
        $refrigeracion = $_POST['refrigeracion'];


        $mensaje["error"] = "*El arrastrado ingresado, ya se encuentra registrado.";

        if(count($this->arrastradosModel->getArrastrado($patente, $nroChasis)) == 0){

            $this->arrastradosModel->agregarArrastrado($patente, $nroChasis, $pesoNeto, $hazard, $tipoCarga, $refrigeracion);

            header("Location: ../arrastrados");
        }

        else{

            echo $this->render->render("view/registerArrastrado.php", $mensaje);

        }

    }

}