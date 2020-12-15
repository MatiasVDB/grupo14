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
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4 ){

            $data["cargas"] = $this->cargaModel->getCargas();
            echo $this->render->render( "view/cargasView.php", $data );
        }
        else{
            header("Location: main");
        }
    }

    public function detalle(){
        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4 ) {
            $id = $_GET["id"];

            $data["carga"] = $this->cargaModel->getCarga($id);
            echo $this->render->render("view/cargaDetalleView.php", $data);
        }else{
            header("Location: ../main");
        }
    }

    public function procesarActualizacionCarga(){
        $imo=0;
        if (!empty($_POST["imo"])) {
            $imo= $_POST['imo'];
        }
        $id = $_POST['id'];
        $tipo = $_POST ['tipo'];
        $pesoNeto = $_POST ['pesoNeto'];
        $hazard = $_POST['hazard'];
        $reefer = $_POST['reefer'];
        $temperatura = $_POST['temperatura'];

        $this->cargaModel->modificarCarga($id, $tipo, $pesoNeto , $hazard, $imo ,$reefer , $temperatura);

        header("Location: ../cargas");
    }

    public function registerCarga(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4 ) {

            echo $this->render->render("view/registerCarga.php");
        }
        else{
            header("Location: ../main");
        }
    }

    public function registrarCarga(){

        $imo=0;
        if (!empty($_POST["imo"])) {
            $imo= $_POST['imo'];
        }
        $tipo = $_POST ['tipo'];
        $pesoNeto = $_POST ['pesoNeto'];
        $hazard = $_POST['hazard'];
        $reefer = $_POST['reefer'];
        $temperatura = $_POST['temperatura'];

        //if(count($this->cargaModel->getCarga($id)) == 0){

            $this->cargaModel->createCarga( $tipo, $pesoNeto , $hazard, $imo ,$reefer , $temperatura);


            header("Location: ../cargas");


        //}

        /*else{

            $data["error"] = "*La ID ingresada ya se encuentra registrada, ingrese otra por favor.";

            echo $this->render->render("view/registerCarga.php", $data);

        }*/


    }

    public function eliminar(){
        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4 ) {
            $id = $_GET["id"];

            $this->cargaModel->eliminar($id);

            header("Location: ../cargas");
        }else{
            header("Location: ../main");
        }

    }
}