<?php

include_once("helper/Configuration.php");
class MainController
{

    private MainModel $mainModel;
    private Render $render;


    public function __construct(MainModel $mainModel, Render $render)
    {
        $this->mainModel = $mainModel;
        $this->render = $render;
    }

    public function index()
    {
    if (isset($_SESSION['logueado'])){
        switch ($_SESSION['logueado']){
            case 0:
                $data['empleadosNav']= "disabled";
                $data['viajesNav']= "disabled";
                $data['cargarProformaNav']="disabled";
                $data['registrarTractorNav']="disabled";
                $data['registrarArrastradoNav']="disabled";
                $data['clientesNav']="disabled";
                $data['cargasNav']="disabled";
                $data['flotaArrastradosNav']="disabled";
                $data['flotaTractoresNav']="disabled";
                $data['proformasNav']="disabled";
                $data['servicesNav']="disabled";
                $data['cargasCombustibleNav']= "disabled";

                break;

            case 1:
                $data['empleadosNav']= "disabled";
                $data['viajesNav']= "disabled";
                $data['cargarProformaNav']="disabled";
                $data['registrarTractorNav']="disabled";
                $data['registrarArrastradoNav']="disabled";
                $data['flotaArrastradosNav']="disabled";
                $data['flotaTractoresNav']="disabled";
                $data['clientesNav']="disabled";
                $data['cargasNav']="disabled";
                $data['servicesNav']="disabled";
                $data['proformasNav']="disabled";
                break;

            case 2:
                $data["bienvenida"]= "Bienvenido supervisor";
                break;
         

            case 3:
                $data['empleadosNav']= "disabled";
                $data['viajesNav']= "disabled";
                $data['cargarProformaNav']="disabled";
                $data['registrarTractorNav']="disabled";
                $data['registrarArrastradoNav']="disabled";
                $data['flotaArrastradosNav']="disabled";
                $data['clientesNav']="disabled";
                $data['cargasNav']="disabled";
                $data['proformasNav']="disabled";
                $data['cargasCombustibleNav']= "disabled";

                break;

            case 4:
                $data['bienvenida']="Bienvenido administrador";




        }

        echo $this->render->render("view/mainView.php", $data);

    }

    else{

        header("Location: home");
    }
    }

    public function cerrarSession() {

        session_start();

    echo $_SESSION['logueado'];
        if (isset($_SESSION['logueado'])){

            session_destroy();

            header("Location: ../home");
        }
    }
}