<?php

include_once("helper/Configuration.php");

class ViajesController
{
    private ViajesModel $viajesModel;
    private Render $render;


    public function __construct( $viajesModel,  $render)
    {
        $this->viajesModel = $viajesModel;
        $this->render = $render;
    }

    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4){
            $data["viajes"] = $this->viajesModel->getViajes();
            echo $this->render->render( "view/viajesView.php", $data );
        }
        else{
            header("Location: main");
        }
    }

    public function detalle(){
        $id = $_GET["id"];

        $data["viaje"] = $this->viajesModel->getViaje($id);
        echo $this->render->render( "view/viajeDetalleView.php", $data );
    }

    public function procesarActualizacionViaje(){
        $id = $_POST['id'];
        $origen = $_POST ['origen'];
        $destino = $_POST ['destino'];
        $fechaFinalizacion = $_POST['fechaFinalizacion'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaCarga = $_POST['fechaCarga'];
        $tiempoReal= $_POST['tiempoReal'];
        $ETA= $_POST['ETA'];
        $ETD= $_POST['ETD'];
        $kilometrosFinal= $_POST['kilometrosFinal'];
        $kilometrosActuales= $_POST['kilometrosActuales'];
        $combustibleFinal= $_POST['combustibleFinal'];
        $combustibleConsumido= $_POST['combustibleConsumido'];
        $patenteVehiculo= $_POST['patenteVehiculo'];
        $chasisVehiculo= $_POST['chasisVehiculo'];

        $this->viajesModel->modificarViaje($id, $origen, $destino, $fechaFinalizacion,$fechaInicio, $fechaCarga , $tiempoReal, $ETA, $ETD, $kilometrosFinal, $kilometrosActuales, $combustibleFinal, $combustibleConsumido, $patenteVehiculo, $chasisVehiculo);

        header("Location: ../viajes");
    }

    public function registerViaje(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == "4") {

            echo $this->render->render("view/registerViaje.php");
        }
        else{
            header("Location: ../main");
        }
    }

    public function registrarViaje(){
        $origen = $_POST ['origen'];
        $destino = $_POST ['destino'];
        $fechaFinalizacion = $_POST['fechaFinalizacion'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaCarga = $_POST['fechaCarga'];
        $tiempoReal= $_POST['tiempoReal'];
        $ETA= $_POST['ETA'];
        $ETD= $_POST['ETD'];
        $kilometrosFinal= $_POST['kilometrosFinal'];
        $kilometrosActuales= $_POST['kilometrosActuales'];
        $combustibleFinal= $_POST['combustibleFinal'];
        $combustibleConsumido= $_POST['combustibleConsumido'];
        $patenteVehiculo= $_POST['patenteVehiculo'];
        $chasisVehiculo= $_POST['chasisVehiculo'];


        $this->viajesModel->createViaje( $origen, $destino, $fechaFinalizacion,$fechaInicio, $fechaCarga , $tiempoReal, $ETA, $ETD, $kilometrosFinal, $kilometrosActuales, $combustibleFinal, $combustibleConsumido, $patenteVehiculo, $chasisVehiculo);


        header("Location: ../viajes");
    }

    public function eliminar(){
        $id = $_GET["id"];

        $this->viajesModel->eliminar($id);

        header("Location: ../viajes");
    }
}