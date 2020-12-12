<?php

include_once("helper/Configuration.php");

class ViajesController
{
    private ViajesModel $viajesModel;
    private ArrastradosModel $arrastradosModel;
    private TractoresModel $tractoresModel;
    private ClientesModel $clientesModel;
    private EmpleadosModel $empleadosModel;
    private Render $render;


    public function __construct(ViajesModel $viajesModel, ArrastradosModel $arrastradosModel, TractoresModel $tractoresModel, ClientesModel $clientesModel,EmpleadosModel $empleadosModel, Render $render)
    {
        $this->viajesModel = $viajesModel;
        $this->arrastradosModel= $arrastradosModel;
        $this->tractoresModel= $tractoresModel;
        $this->clientesModel= $clientesModel;
        $this->empleadosModel= $empleadosModel;
        $this->render = $render;
    }

    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2){
                    $data["viajes"] = $this->viajesModel->getViajes();
            echo $this->render->render( "view/viajesView.php", $data );
        }
        else{
            header("Location: main");
        }
    }

    public function detalle(){
        $id = $_GET["id"];


        $data = array("viaje"=> $this->viajesModel->getViaje($id), "arrastrados"=> $this->arrastradosModel->getArrastrados(), "tractores"=> $this->tractoresModel->getTractores());
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
        $idVehiculo= $_POST['idVehiculo'];
        $idArrastrado= $_POST['idArrastrado'];
        $numeroDocumentoChofer= $_POST["dniChofer"];
        $getTipoDocumento= $this->empleadosModel->getTipoDocumento($numeroDocumentoChofer)[0];
        $tipoDocumentoChofer= implode($getTipoDocumento);
        $cuitCliente= $_POST["cuit"];
        $kilometrosFinal= $_POST['kilometrosFinal'];
        $kilometrosActuales= $_POST['kilometrosActuales'];
        $combustibleFinal= $_POST['combustibleFinal'];
        $combustibleConsumido= $_POST['combustibleConsumido'];

        $this->viajesModel->modificarViaje($id, $origen, $destino, $fechaFinalizacion,$fechaInicio, $fechaCarga , $tiempoReal, $ETA, $ETD, $kilometrosActuales, $kilometrosFinal, $combustibleFinal, $combustibleConsumido, $idVehiculo, $tipoDocumentoChofer, $numeroDocumentoChofer, $cuitCliente, $idArrastrado);

        header("Location: ../viajes");
    }

    public function registerViaje(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == "4") {

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
        $fechaCarga = $_POST['fechaCarga'];
        $ETA= $_POST['ETA'];
        $ETD= $_POST['ETD'];
        $kilometrosFinal= 0.0;
        $kilometrosActuales= 0.0;
        $combustibleFinal= 0.0;
        $combustibleConsumido= 0.0;
        $idVehiculo= $_POST['idVehiculo'];
        $idArrastrado= $_POST['idArrastrado'];

        $this->viajesModel->createViaje($origen, $destino, $fechaInicio, $fechaFinalizacion, $fechaCarga , $ETA, $ETD, $kilometrosActuales, $kilometrosFinal, $combustibleFinal, $combustibleConsumido, $idVehiculo, $idArrastrado);

        header("Location: ../viajes");
    }

    public function eliminar()
    {

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == "4") {

            $id = $_GET["id"];

            $this->viajesModel->eliminar($id);

            header("Location: ../viajes");

        }else{
            header("Location: ../main");
        }

    }
}