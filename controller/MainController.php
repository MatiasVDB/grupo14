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
                $data ['titulo'] = "Bienvenido Invitado";
                $data['descripcion'] = "No tiene autorización para realizar operaciones en el sitio.";
                $data ['listLink'] = "main";
                $data ['descripcionListLinkBoton'] = "";
                $data['link']="main";


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
                $data ['titulo'] = "Viajes Del Chofer";
                $data['descripcion'] = "Sección para ver las proformas, viajes y poder registrar la carga de combustibles realizadas.";
                $data ['listLink'] = "cargasCombustible";
                $data ['descripcionListLinkBoton'] = "Cargas De Combustible";
                $data['link']="proformasDelChofer";
                break;

            case 2:
                $data ['titulo'] = "Empleados";
                $data['descripcion'] = "Sección para dar de alta y eliminar empleados de la aplicación.";
                $data ['listLink'] = "";
                $data ['descripcionListLinkBoton'] = "";
                $data['link']="empleados";
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
                $data ['titulo'] = "Service";
                $data['descripcion'] = "Sección para ver la lista de services realizados a los vehículos de la aplicación.";
                $data ['listLink'] = "tractores";
                $data ['descripcionListLinkBoton'] = "Ver la flota de tractores, revisar mantenimiento";
                $data['link']="services";
                break;

            case 4:
                $data ['titulo'] = "Empleados";
                $data['descripcion'] = "Sección para dar de alta, actualizar y eliminar empleados de la aplicación.";
                $data ['listLink'] = "";
                $data ['descripcionListLinkBoton'] = "";
                $data['link']="empleados";

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