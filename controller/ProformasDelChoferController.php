<?php
include_once("helper/Configuration.php");
include ("./phpqrcode/qrlib.php");

class ProformasDelChoferController
{

    private ProformaModel $proformaModel;
    private ClientesModel $clientesModel;
    private ViajesModel  $viajesModel;
    private CargasModel $cargasModel;
    private EmpleadosModel $empleadosModel;
    private Render $render;


    public function __construct(ProformaModel $proformaModel, ClientesModel $clientesModel, ViajesModel $viajesModel, CargasModel $cargasModel, EmpleadosModel $empleadosModel, Render $render)
    {
        $this->proformaModel = $proformaModel;
        $this->clientesModel = $clientesModel;
        $this->viajesModel = $viajesModel;
        $this->cargasModel = $cargasModel;
        $this->empleadosModel = $empleadosModel;
        $this->render = $render;
    }

    public function index()
    {

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 1) {
            switch ($_SESSION['logueado']) {

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
            }

            $documentoString = $_SESSION['numeroDeDocumento'];

            $numeroDeDocumento_chofer = (int)$documentoString;


            $data["proformas"] = $this->proformaModel->getProformaParaElChofer($numeroDeDocumento_chofer);

            echo $this->render->render("view/proformasDelChoferView.php", $data);

        } else {

            header("Location: ../main");
        }
    }

    public function detalle()
    {

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 1) {

            $numero = $_GET["numero"];

            $proforma = $this->proformaModel->getProforma($numero);

            $data = array("proforma" => $this->proformaModel->getProforma($numero), "cliente" => $this->clientesModel->getCliente($proforma[0]["CUIT_cliente"]), "viaje" => $this->viajesModel->getViaje($proforma[0]["id_viaje"]),
                "empleado" => $this->empleadosModel->getEmpleado($proforma[0]["numeroDeDocumento_chofer"]), "carga" => $this->cargasModel->getCarga($proforma[0]["id_carga"]));

            echo $this->render->render("view/imprimirProformaView.php", $data);
        } else {

            header("Location: ../main");
        }
    }


    public function imprimirQR()
    {
        $numero = $_GET['id_viaje'];
        $numeroDocumento = $_GET['numeroDeDocumento_chofer'];
        QRcode::png('localhost/grupo14/cargasCombustible/registerCargaCombustible?idViaje=' . $numero . '&numeroDeDocumento_chofer=' . $numeroDocumento);
        //localhost/grupo14/cargasCombustible/registerCargaCombustible?id_viaje=2&numeroDeDocumento_chofer=41214566
        // QRcode::png('http://localhost/grupo14/EditarProforma/editarDatosEnLaProforma?numero='.$numero)
    }

}