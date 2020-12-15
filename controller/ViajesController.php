<?php

include_once("helper/Configuration.php");

class ViajesController
{
    private ViajesModel $viajesModel;
    private ArrastradosModel $arrastradosModel;
    private TractoresModel $tractoresModel;
    private ClientesModel $clientesModel;
    private EmpleadosModel $empleadosModel;
    private CargasCombustibleModel $cargasCombustibleModel;
    private Render $render;


    public function __construct(ViajesModel $viajesModel, ArrastradosModel $arrastradosModel, TractoresModel $tractoresModel, ClientesModel $clientesModel,EmpleadosModel $empleadosModel, CargasCombustibleModel $cargasCombustibleModel, Render $render)
    {
        $this->viajesModel = $viajesModel;
        $this->arrastradosModel= $arrastradosModel;
        $this->tractoresModel= $tractoresModel;
        $this->clientesModel= $clientesModel;
        $this->empleadosModel= $empleadosModel;
        $this->cargasCombustibleModel= $cargasCombustibleModel;
        $this->render = $render;
    }

    public function index(){
        if (isset($_SESSION['logueado']) and  $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4 ){
                    $data["viajes"] = $this->viajesModel->getViajes();
            echo $this->render->render( "view/viajesView.php", $data );
        }
        else{
            header("Location: main");
        }
    }

    public function detalle(){
        if (isset($_SESSION['logueado']) and  $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4){

        $id = $_GET["id"];


        $data = array("viaje"=> $this->viajesModel->getViaje($id), "arrastrados"=> $this->arrastradosModel->getArrastrados(), "tractores"=> $this->tractoresModel->getTractores(), "cargas"=> $this->cargasCombustibleModel->getCargasCombustibleViaje($id));
        echo $this->render->render( "view/viajeDetalleView.php", $data );

        }

        else{
            header("Location: main");
        }
    }

    public function viajeDetalleChofer(){

        if(isset($_SESSION['logueado']) and $_SESSION['logueado'] == 1){

            $id = $_GET["id"];

            $viaje = $this->viajesModel->getViaje($id);

            $data = array("viaje"=> $this->viajesModel->getViaje($id), "arrastrado"=> $this->arrastradosModel->getArrastrado($viaje[0]["idArrastrado"]), "tractor"=> $this->tractoresModel->getTractorPorID($viaje[0]["idVehiculo"]), "cargas"=> $this->cargasCombustibleModel->getCargasCombustibleViaje($id));
            echo $this->render->render( "view/viajeDetalleChoferView.php", $data );


        }

        else{
            header("Location: main");

        }
    }

    public function procesarActualizacionViaje(){
        $id = $_POST['id'];
        $origen = $_POST ['origen'];
        $destino = $_POST ['destino'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFinalizacion = $_POST['fechaFinalizacion'];
        $ETA= $_POST['ETA'];
        $ETD= $_POST['ETD'];
        $kilometrosFinal= 0.0;
        $kilometrosActuales= 0.0;
        $combustibleFinal= 0.0;
        $combustibleConsumido= 0.0;
        $idVehiculo= $_POST['idVehiculo'];
        $idArrastrado= $_POST['idArrastrado'];

        //echo ("$id, $origen,$destino,-$fechaInicio,$fechaFinalizacion,$ETA,$ETD -, $kilometrosFinal, $kilometrosActuales, $combustibleConsumido, $combustibleFinal, $idVehiculo, $idArrastrado");

        $this->viajesModel->modificarViaje($id, $origen, $destino, $fechaFinalizacion,$fechaInicio , $ETA, $ETD, $kilometrosActuales, $kilometrosFinal, $combustibleFinal, $combustibleConsumido, $idVehiculo, $idArrastrado);

        header("Location: ../viajes");
    }

    public function registerViaje(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            $data = array("arrastrados"=> $this->arrastradosModel->getArrastrados(), "tractores"=> $this->tractoresModel->getTractores());

            echo $this->render->render("view/registerViaje.php", $data);
        }
        else{
            header("Location: ../main");
        }
    }

    public function registrarViaje(){
        $origen = $_POST ['origen'];
        $destino = $_POST ['destino'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFinalizacion = $_POST['fechaFinalizacion'];
        $ETA= $_POST['ETA'];
        $ETD= $_POST['ETD'];
        $kilometrosFinal= 0.0;
        $kilometrosActuales= 0.0;
        $combustibleFinal= 0.0;
        $combustibleConsumido= 0.0;
        $idVehiculo= $_POST['idVehiculo'];
        $idArrastrado= $_POST['idArrastrado'];


        $this->viajesModel->createViaje($origen, $destino, $fechaInicio, $fechaFinalizacion , $ETA, $ETD, $kilometrosActuales, $kilometrosFinal, $combustibleFinal, $combustibleConsumido, $idVehiculo, $idArrastrado);

        header("Location: ../viajes");
    }

    public function eliminar()
    {
        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4 ) {
            $id = $_GET["id"];

            $this->viajesModel->eliminar($id);

            header("Location: ../viajes");
        }else{
            header("Location: ../main");
        }
    }
}