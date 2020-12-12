<?php


class CargasCombustibleController
{

    private CargasCombustibleModel $cargasCombustibleModel;
    private Render $render;

    public function __construct(CargasCombustibleModel $cargasCombustibleModel, Render $render)
    {
        $this->cargasCombustibleModel = $cargasCombustibleModel;
        $this->render = $render;
    }


    public function index()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4) {
            $data["cargas"] = $this->cargasCombustibleModel->getCargasCombustible();
            echo $this->render->render("view/cargasCombustibleView.php", $data);
        }else{
            header("Location: main");
        }
    }


    public function registerCargaCombustible(){

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 1 or 2) {
            // VER
            // EJEMPLO DE URL localhost/grupo14/cargasCombustible/registerCargaCombustible?idViaje=1&numeroDeDocumento_chofer=41823476&tipoDeDocumento_chofer=DNI
            $idViaje= $_GET['idViaje'];
            $numeroDeDocumento_chofer = $_GET['numeroDeDocumento_chofer'];
            $tipoDeDocumento_chofer = $_GET['tipoDeDocumento_chofer'];

            $data["datos"] = array("idViaje" => $idViaje, "numeroDeDocumento_chofer" => $numeroDeDocumento_chofer, "tipoDeDocumento_chofer" => $tipoDeDocumento_chofer);
            echo $this->render->render("view/registerCargaCombustible.php", $data);

        }
        else{
           header("Location: ../main");
        }
    }
    /*
    public function vistaActualizarArrastrado()
    {

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 ) {
            $id = $_GET["id"];

            $data = array("arrastrado" => $this->cargasCombustibleModel->getArrastrado($id),"cargas" => $this->cargaModel->getCargas());

            echo $this->render->render("view/arrastradoModificarView.php", $data);
        }else{
            header("Location: /grupo14/main");
        }


    }

    public function actualizarArrastrado()
    {

        $pesoNeto = $_POST['peso'];
        $hazard = $_POST['hazard'];
        $tipoCarga = $_POST['tipo'];
        $id = $_POST['id'];
        $refrigeracion = $_POST['refrigeracion'];
        $carga = $_POST['carga'];

        $data['datos'] = $this->cargasCombustibleModel->modificarArrastrado($id, $tipoCarga, $refrigeracion, $pesoNeto, $hazard, $carga);

        header("Location: ../arrastrados");


    }

    public function eliminarArrastrado()
    {

        $id = $_GET['id'];

        $this->cargasCombustibleModel->eliminarArrastrado($id);

        header("Location: ../arrastrados");

        exit();


    }*/

    public function registrarCargaCombustible(){
        $idViaje= $_POST['idViaje'];
        $numeroDeDocumento_chofer = $_POST['numeroDeDocumento_chofer'];
        $tipoDeDocumento_chofer = $_POST['tipoDeDocumento_chofer'];
        $lugar = $_POST['lugar'];
        $cantidad = $_POST['cantidad'];
        $importe = $_POST['importe'];
        $kilometrosRecorridos= $_POST['kilometrosRecorridos'];

        $this->cargasCombustibleModel->setCargaCombustible($idViaje,$numeroDeDocumento_chofer, $tipoDeDocumento_chofer, $lugar, $cantidad, $importe, $kilometrosRecorridos );
            header("Location: http://localhost/grupo14/cargasCombustibleView");
    }

}