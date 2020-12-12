<?php


class ArrastradosController
{

    private ArrastradosModel $arrastradosModel;
    private CargasModel $cargaModel;
    private Render $render;

    public function __construct(ArrastradosModel $arrastradosModel, CargasModel $cargaModel, Render $render)
    {
        $this->arrastradosModel = $arrastradosModel;
        $this->cargaModel = $cargaModel;
        $this->render = $render;
    }


    public function index()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2) {
            $data["arrastrados"] = $this->arrastradosModel->getArrastrados();

            echo $this->render->render("view/arrastradosView.php", $data);

        }else{

            header("Location: main");
        }
    }


    public function registerArrastrado(){

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4) {

            $data = array("arrastrados" => $this->arrastradosModel->getArrastrados(),"cargas" => $this->cargaModel->getCargas());
            echo $this->render->render("view/registerArrastrado.php", $data);

        }

        else{
            header("Location: ../main");
        }

    }

    public function detalleArrastrado()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 ) {
          $id = $_GET["id"];

        $data = array("arrastrado" => $this->arrastradosModel->getArrastrado($id),"cargas" => $this->cargaModel->getCargas());

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

        $id = $_GET['id'];

        $this->arrastradosModel->eliminarArrastrado($id);

        header("Location: ../arrastrados");

        exit();


    }

    public function registrarArrastrado(){

        $patente = $_POST['patente'];
        $nroChasis = $_POST['chasis'];
        $carga = $_POST['carga'];

        $mensaje["error"] = "*El arrastrado ingresado, ya se encuentra registrado.";

        if(count($this->arrastradosModel->getArrastrado($patente, $nroChasis)) == 0){

            $this->arrastradosModel->setArrastrado($patente, $nroChasis, $carga);

            header("Location: ../arrastrados");
        }

        else{

            echo $this->render->render("view/registerArrastrado.php", $mensaje);

        }

    }

}