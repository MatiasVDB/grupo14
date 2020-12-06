<?php


class TractoresController
{

    private TractoresModel $tractoresModel;
    private Render $render;

    public function __construct(TractoresModel $tractoresModel, Render $render)
    {
        $this->tractoresModel = $tractoresModel;
        $this->render = $render;
    }


    public function index(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == "4"){
        $data["tractores"] = $this->tractoresModel->getTractores();
        echo $this->render->render("view/tractoresView.php", $data);

        }

        else{

            header("Location: main");
        }

    }

    public function detalle(){

        $patente = $_GET['patente'];
        $nroChasis = $_GET['chasis'];

        $data['tractor'] = $this->tractoresModel->getTractor($patente,$nroChasis);

        echo $this->render->render("view/tractorDetalleView.php", $data);

    }

    public function registerTractor(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == "4") {

            echo $this->render->render("view/registerTractor.php");

        }

        else{

            header("Location: ../main");

        }

    }

    public function registrarTractor(){

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $patente = $_POST['patente'];
        $nroMotor = $_POST['motor'];
        $nroChasis = $_POST['chasis'];
        $kilometros = $_POST['kilometros'];
        $anoDeFabricacion = $_POST['año'];

        $mensaje["error"] = "*El tractor ingresado, ya se encuentra registrado.";

        if(count($this->tractoresModel->getTractor($patente, $nroChasis)) == 0){

            $this->tractoresModel->createTractor($marca,$modelo,$patente,$nroMotor,$nroChasis,$kilometros,$anoDeFabricacion);

            header("Location: ../tractores");
        }

        else{

            echo $this->render->render("view/registerTractor.php", $mensaje);

        }


    }

    public function actualizarTractor(){

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $patente = $_POST['patente'];
        $nroMotor = $_POST['motor'];
        $nroChasis = $_POST['chasis'];
        $kilometros = $_POST['kilometros'];
        $anoDeFabricacion = $_POST['año'];

        $this->tractoresModel->modificarTractor($marca, $modelo, $patente, $nroMotor,$nroChasis,$kilometros,$anoDeFabricacion);

        header("Location: ../tractores");



    }

    public function eliminarTractor(){

        $patente = $_GET['patente'];
        $nroChasis = $_GET['chasis'];

        $this->tractoresModel->eliminar($patente, $nroChasis);

       header("Location: ../tractores");

        exit();



    }

}