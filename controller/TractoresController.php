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

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 4 or 3 or 2 or 1){
            switch ($_SESSION['logueado']) {
                case 1:
                    $data['empleadosNav']= "disabled";
                    $data['viajesNav']= "disabled";
                    $data['cargarProformaNav']="disabled";
                    $data['registrarTractorNav']="disabled";
                    $data['registrarArrastradoNav']="disabled";
                    $data['proformasNav']="disabled";
                    $data['servicesNav']="disabled";
                    $data['actualizarTractor'] = "disabled";
                    $data['eliminarTractor'] = "disabled";
                    $data['agregarTractor']= "disabled";
                    $data['mantenimiento']= "disabled";

                    break;


                case 3:
                    $data['empleadosNav'] = "disabled";
                    $data['viajesNav'] = "disabled";
                    $data['cargarProformaNav'] = "disabled";
                    $data['registrarTractorNav'] = "disabled";
                    $data['registrarArrastradoNav'] = "disabled";
                    $data['clientesNav'] = "disabled";
                    $data['cargasNav'] = "disabled";
                    $data['actualizarTractor'] = "disabled";
                    $data['eliminarTractor'] = "disabled";
                    $data['agregarTractor']= "disabled";
                    break;
            }
        $data["tractores"] = $this->tractoresModel->getTractores();
        echo $this->render->render("view/tractoresView.php", $data);

        }

        else{

            header("Location: main");
        }

    }

    public function detalle()
    {


        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 4 or 2) {

        $id = $_GET['id'];

        $data['tractor'] = $this->tractoresModel->getTractorPorID($id);


            echo $this->render->render("view/tractorDetalleView.php", $data);

        }else{
            header("Location: /grupo14/main");
        }
    }

    public function registerTractor(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 4 or 2) {

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
        $chasis = $_POST['chasis'];
        $kilometros = $_POST['kilometros'];
        $anoDeFabricacion = $_POST['año'];

        $mensaje["error"] = "*El tractor ingresado, ya se encuentra registrado.";

        if(count($this->tractoresModel->getTractor($patente, $chasis)) == 0){

            $this->tractoresModel->createTractor($marca,$modelo,$patente,$nroMotor,$chasis,$kilometros,$anoDeFabricacion);

            header("Location: ../tractores");
        }

        else{

            echo $this->render->render("view/registerTractor.php", $mensaje);

        }


    }

    public function actualizarTractor(){


        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $kilometros = $_POST['kilometros'];
        $nroMotor = $_POST['motor'];
        $anoDeFabricacion = $_POST['año'];
        $id = $_POST['id'];

        $this->tractoresModel->modificarTractor($id, $marca, $modelo, $nroMotor,$kilometros,$anoDeFabricacion);

        header("Location: ../tractores");



    }

    public function eliminarTractor(){


        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 4 or 2) {

              $id = $_GET['id'];

        $this->tractoresModel->eliminar($id);

            header("Location: ../tractores");

            exit();
        }else{
            header("Location: ../main");
        }



    }

}