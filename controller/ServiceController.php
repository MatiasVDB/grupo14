<?php


class ServiceController
{

    private ServiceModel  $serviceModel;
    private FechaServiceModel $fechaServiceModel;
    private TractoresModel $tractoresModel;
    private EmpleadosModel $empleadosModel;
    private Render $render;


    public function __construct(ServiceModel $serviceModel, $fechaServiceModel, TractoresModel $tractoresModel, EmpleadosModel $empleadosModel, Render $render)
    {
        $this->serviceModel = $serviceModel;
        $this->fechaServiceModel = $fechaServiceModel;
        $this->tractoresModel = $tractoresModel;
        $this->empleadosModel = $empleadosModel;
        $this->render = $render;
    }

    public function  index(){

        if(isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 3 or $_SESSION['logueado'] == 4) {

            switch ($_SESSION['logueado']) {

                case 3:
                    $data['empleadosNav'] = "disabled";
                    $data['viajesNav'] = "disabled";
                    $data['cargarProformaNav'] = "disabled";
                    $data['registrarTractorNav'] = "disabled";
                    $data['registrarArrastradoNav'] = "disabled";
                    $data['flotaArrastradosNav'] = "disabled";
                    $data['proformasNav'] = "disabled";
                    $data['clientesNav'] = "disabled";
                    $data['cargasNav'] = "disabled";
                    $data['actualizarTractor'] = "disabled";
                    $data['eliminarTractor'] = "disabled";
                    $data['agregarTractor']= "disabled";
                    $data['cargasCombustibleNav']= "disabled";

                    break;
            }

            $data["services"] = $this->serviceModel->getServicesConTractoresyChoferes();

            echo $this->render->render("view/servicesView.php", $data);

        }

        else{

            header("Location: main");
        }
    }

    public function realizarService(){

        if(isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 3 or $_SESSION['logueado'] == 4){

        $id = $_GET["id_tractor"];

       $data = array("tractor"=>$this->tractoresModel->getTractorPorID($id), "mecanicos"=>$this->empleadosModel->getMecanicos());

       echo $this->render->render("view/serviceRegisterView.php", $data);
        }

        else{

            header("Location: main");
        }
    }

    public function registrarService(){

        $codigo = $_POST["codigo"];
        $id_tractor = $_POST["id_tractor"];
        $repuestos = $_POST["repuestos"];
        $tipoDeService = $_POST["tipoDeService"];
        $numeroDeDocumentoMecanico = $_POST["numeroDeDocumento_mecanico"];
        $fechaDeService = $_POST["fechaService"];
        $horaService = $_POST["hora"];

        if(count($this->serviceModel->getService($codigo)) == 0 ) {

        $this->serviceModel->registrarService($codigo, $id_tractor,$repuestos, $tipoDeService, $numeroDeDocumentoMecanico);
        $this->fechaServiceModel->setFechaService($id_tractor,  $horaService, $fechaDeService, $codigo);

            header("Location: ../services");

        }

        else{

            $data = array("tractor"=>$this->tractoresModel->getTractorPorID($id_tractor), "mecanicos"=>$this->empleadosModel->getMecanicos(), "mensaje"=>"*El código ingresado ya existe, ingrese otro por favor.");

            echo $this->render->render("./view/serviceRegisterView.php", $data);


        }


    }

    public function serviceDetalle()
    {

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 3 or $_SESSION['logueado'] == 4) {

            $codigo = $_GET["codigo"];

            $data = array("service" => $this->serviceModel->getServiceConTractoresyChoferes($codigo), "fechaService" => $this->fechaServiceModel->getFechaService($codigo));

            echo $this->render->render("view/serviceDetalleView.php", $data);
        }

        else{

            header("Location: main");
        }
    }

    public function eliminarService(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 3 or $_SESSION['logueado'] == 4) {

            $codigo = $_GET["codigo"];

            $id_tractor = $_GET["id_tractor"];

            $this->serviceModel->deleteService($codigo);


            header("Location: ../services");

        }

        else{

            header("Location: main");
        }

    }
}