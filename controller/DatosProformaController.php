<?php


class datosProformaController
{

    private DatosProformaModel $datosProformaModel;
    private ClientesModel $clientesModel;
    private ViajesModel  $viajesModel;
    private EmpleadosModel $empleadosModel;
    private Render $render;


    public function __construct(DatosProformaModel $datosProformaModel, ClientesModel $clientesModel, ViajesModel $viajesModel, EmpleadosModel $empleadosModel, Render $render)
    {
        $this->datosProformaModel = $datosProformaModel;
        $this->clientesModel = $clientesModel;
        $this->viajesModel = $viajesModel;
        $this->empleadosModel= $empleadosModel;
        $this->render = $render;
    }


    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4) {

            $data = array("clientes" => $this->clientesModel->getClientes(), "viajes" => $this->viajesModel->getViajesConArrastradosYCargas(), "empleados" => $this->empleadosModel->getChoferes());


            echo $this->render->render("view/datosProformaView.php", $data);

        }

        else{

            header("Location: main");
        }

    }









}