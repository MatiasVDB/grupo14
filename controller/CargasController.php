<?php

include_once("helper/Configuration.php");

class CargasController
{
    private CargasModel $cargaModel;
    private Render $render;


    public function __construct( $cargaModel,  $render)
    {
        $this->cargaModel = $cargaModel;
        $this->render = $render;
    }

    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 1){
            $data["cargas"] = $this->cargaModel->getCargas();
            echo $this->render->render( "view/cargasView.php", $data );
        }
        else{
            header("Location: main");
        }
    }

    public function detalle(){
        $id = $_GET["id"];

        $data["carga"] = $this->cargaModel->getCarga($id);
        echo $this->render->render( "view/cargaDetalleView.php", $data );
    }

    public function procesarActualizacionCarga(){
        $id = $_POST['id'];
        $tipo = $_POST ['tipo'];
        $pesoNeto = $_POST ['pesoNeto'];
        $hazard = $_POST['hazard'];
        $imoClass = $_POST['imoClass'];
        $imoSclass = $_POST['imoSclass'];
        $reefer = $_POST['reefer'];
        $temperatura = $_POST['temperatura'];

        $this->cargaModel->modificarCarga($id, $tipo, $pesoNeto , $hazard, $imoClass,$imoSclass ,$reefer , $temperatura);

        header("Location: ../cargas");
    }

    public function registerCarga(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == "4") {

            echo $this->render->render("view/registerCarga.php");
        }
        else{
            header("Location: ../main");
        }
    }

    public function registrarCarga(){
        $id = $_POST['id'];
        $tipo = $_POST ['tipo'];
        $pesoNeto = $_POST ['pesoNeto'];
        $hazard = $_POST['hazard'];
        $imoClass = $_POST['imoClass'];
        $imoSclass = $_POST['imoSclass'];
        $reefer = $_POST['reefer'];
        $temperatura = $_POST['temperatura'];

        $this->cargaModel->createCarga($id, $tipo, $pesoNeto , $hazard, $imoClass,$imoSclass ,$reefer , $temperatura);


        header("Location: ../cargas");
    }

    public function eliminar(){
        $id = $_GET["id"];

        $this->cargaModel->eliminar($id );

        header("Location: ../cargas");

    }
}