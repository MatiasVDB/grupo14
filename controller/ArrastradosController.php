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
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 3 or 2 or 1) {
            switch ($_SESSION['logueado']) {
                case 1:
                    $data['empleadosNav']= "disabled";
                    $data['viajesNav']= "disabled";
                    $data['cargarProformaNav']="disabled";
                    $data['registrarTractorNav']="disabled";
                    $data['registrarArrastradoNav']="disabled";
                    $data['proformasNav']="disabled";
                    $data['servicesNav']="disabled";
                    $data['actualizarArrastrado'] = "disabled";
                    $data['eliminarArrastrado'] = "disabled";
                    $data['agregarArrastrado']= "disabled";
                    break;


                case 3:
                    $data['empleadosNav'] = "disabled";
                    $data['viajesNav'] = "disabled";
                    $data['cargarProformaNav'] = "disabled";
                    $data['registrarTractorNav'] = "disabled";
                    $data['registrarArrastradoNav'] = "disabled";
                    $data['clientesNav'] = "disabled";
                    $data['cargasNav'] = "disabled";
                    $data['actualizarArrastrado'] = "disabled";
                    $data['eliminarArrastrado'] = "disabled";
                    $data['agregarArrastrado']= "disabled";
                    break;
            }

            $data["arrastrados"] = $this->arrastradosModel->getArrastrados();

            echo $this->render->render("view/arrastradosView.php", $data);

        }else{

            header("Location: main");
        }
    }


    public function registerArrastrado(){

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2) {

            $data = array("arrastrados" => $this->arrastradosModel->getArrastrados());
            echo $this->render->render("view/registerArrastrado.php", $data);

        }

        else{
            header("Location: ../main");
        }

    }

    public function detalleArrastrado()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2) {
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

        $data['datos'] = $this->arrastradosModel->modificarArrastrado($id, $tipo);

        header("Location: ../arrastrados");


    }

    public function eliminarArrastrado()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2) {

            $id = $_GET['id'];

            $this->arrastradosModel->eliminarArrastrado($id);

            header("Location: ../arrastrados");

            exit();
        }else{
            header("Location: /grupo14/main");
        }

    }

    public function registrarArrastrado(){

        $patente = $_POST['patente'];
        $nroChasis = $_POST['chasis'];

        $mensaje["error"] = "*El arrastrado ingresado, ya se encuentra registrado.";

        if(count($this->arrastradosModel->getArrastrado($patente, $nroChasis)) == 0){

            $this->arrastradosModel->setArrastrado($patente, $nroChasis);

            header("Location: ../arrastrados");
        }

        else{

            echo $this->render->render("view/registerArrastrado.php", $mensaje);

        }

    }

}