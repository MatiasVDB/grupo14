<?php


class MantenimientoController
{

    private MantenimientoModel $mantenimientoModel;
    private TractoresModel $tractoresModel;
    private FechaServiceModel $fechaServiceModel;
    private Render $render;


    public function __construct(MantenimientoModel $mantenimientoModel, TractoresModel $tractoresModel, FechaServiceModel $fechaServiceModel, Render $render)
    {
        $this->mantenimientoModel = $mantenimientoModel;
        $this->tractoresModel = $tractoresModel;
        $this->fechaServiceModel = $fechaServiceModel;
        $this->render = $render;
    }

    public function index(){

        if(isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 3 or $_SESSION['logueado'] == 4){

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

        $id_tractor = $_GET["id_tractor"];

        $data = array("tractor"=>$this->tractoresModel->getTractorPorID($id_tractor), "fechas"=>$this->fechaServiceModel->getFechasServicesDeTractores($id_tractor));

        echo $this->render->render("view/mantenimientoView.php", $data);
    }

        else{

            header("Location: main");
        }

    }

}