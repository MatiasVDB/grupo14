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
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2 or 1) {
            switch ($_SESSION['logueado']){

                case 1:
                    $data['empleadosNav']= "disabled";
                    $data['viajesNav']= "disabled";
                    $data['cargarProformaNav']="disabled";
                    $data['registrarTractorNav']="disabled";
                    $data['registrarArrastradoNav']="disabled";

                    break;


            }
            $data["cargas"] = $this->cargasCombustibleModel->getCargasCombustible();
            echo $this->render->render("view/cargasCombustibleView.php", $data);
        }else{
            header("Location: main");
        }
    }


    public function registerCargaCombustible(){


        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2 or 1) {


            // VER
            // EJEMPLO DE URL localhost/grupo14/cargasCombustible/registerCargaCombustible?idViaje=1&numeroDeDocumento_chofer=41823476&tipoDeDocumento_chofer=DNI
            $idViaje= $_GET['idViaje'];
            $numeroDeDocumento_chofer = $_GET['numeroDeDocumento_chofer'];

            $data["datos"] = array("idViaje" => $idViaje, "numeroDeDocumento_chofer" => $numeroDeDocumento_chofer);
            echo $this->render->render("view/registerCargaCombustible.php", $data);
        }
        else{
           header("Location: ../main");
        }
    }


    public function registrarCargaCombustible(){
        $idViaje= $_POST['idViaje'];
        $numeroDeDocumento_chofer = $_POST['numeroDeDocumento_chofer'];
        $lugar = $_POST['lugar'];
        $cantidad = $_POST['cantidad'];
        $importe = $_POST['importe'];
        $kilometrosRecorridos= $_POST['kilometrosRecorridos'];

        $this->cargasCombustibleModel->setCargaCombustible($idViaje,$numeroDeDocumento_chofer, $lugar, $cantidad, $importe, $kilometrosRecorridos );
            header("Location: http://localhost/grupo14/main");
    }

}