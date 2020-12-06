<?php


class datosProformaController
{

    private DatosProformaModel $datosProformaModel;
    private ClientesModel $clientesModel;
    private ViajesModel  $viajesModel;
    private CargasModel $cargaModel;
    private EmpleadosModel $empleadosModel;
    private Render $render;


    public function __construct(DatosProformaModel $datosProformaModel, ClientesModel $clientesModel, ViajesModel $viajesModel, CargasModel $cargaModel, EmpleadosModel $empleadosModel, Render $render)
    {
        $this->datosProformaModel = $datosProformaModel;
        $this->clientesModel = $clientesModel;
        $this->viajesModel = $viajesModel;
        $this->cargaModel = $cargaModel;
        $this->empleadosModel= $empleadosModel;
        $this->render = $render;
    }


    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4) {

            $data = array("clientes" => $this->clientesModel->getClientes(), "viajes" => $this->viajesModel->getViajes(),
                "cargas" => $this->cargaModel->getCargas(), "empleados" => $this->empleadosModel->getChoferes());


            echo $this->render->render("view/datosProformaView.php", $data);

        }

        else{

            header("Location: main");
        }

    }









}