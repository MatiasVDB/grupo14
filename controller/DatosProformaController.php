<?php


class datosProformaController
{

    private DatosProformaModel $datosProformaModel;
    private ClientesModel $clientesModel;
    private ViajesModel  $viajesModel;
    private EmpleadosModel $empleadosModel;
    private CargasModel $cargasModel;
    private Render $render;


    public function __construct(DatosProformaModel $datosProformaModel, ClientesModel $clientesModel, ViajesModel $viajesModel, EmpleadosModel $empleadosModel, CargasModel $cargasModel, Render $render)
    {
        $this->datosProformaModel = $datosProformaModel;
        $this->clientesModel = $clientesModel;
        $this->viajesModel = $viajesModel;
        $this->cargasModel = $cargasModel;
        $this->empleadosModel= $empleadosModel;
        $this->render = $render;
    }


    public function index(){
        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            $data = array("clientes" => $this->clientesModel->getClientes(), "viajes" => $this->viajesModel->getViajes(), "empleados" => $this->empleadosModel->getChoferes(),
                "cargas" => $this->cargasModel->getCargas());


            echo $this->render->render("view/datosProformaView.php", $data);

        }

        else{

            header("Location: main");
        }

    }









}