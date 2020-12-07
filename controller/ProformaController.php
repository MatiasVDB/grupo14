<?php
include_once("helper/Configuration.php");
include ("./phpqrcode/qrlib.php");

class ProformaController
{
    private ProformaModel $proformaModel;
    private ClientesModel $clientesModel;
    private ViajesModel  $viajesModel;
    private CargasModel $cargaModel;
    private EmpleadosModel $empleadosModel;
    private Render $render;


    public function __construct(ProformaModel $proformaModel, ClientesModel $clientesModel, ViajesModel $viajesModel, CargasModel $cargaModel, EmpleadosModel $empleadosModel, Render $render)
    {
        $this->proformaModel = $proformaModel;
        $this->clientesModel = $clientesModel;
        $this->viajesModel = $viajesModel;
        $this->cargaModel = $cargaModel;
        $this->empleadosModel = $empleadosModel;
        $this->render = $render;
    }


    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2) {


            echo $this->render->render( "view/proformaRegisterView.php");
        }

        else{
            header("Location: main");
        }
    }



    public function mostrarDatosEnLaProforma(){

        $CUIT_cliente = $_POST["CUIT_cliente"];
        $ID_viaje = $_POST["id_viaje"];
        $ID_carga = $_POST["id_carga"];
        $tipoDNI = $_POST["tipoDeDocumento_usuario"];
        $numeroDNI = $_POST["numeroDeDocumento_usuario"];

        $data = array("cliente" => $this->clientesModel->getCliente($CUIT_cliente), "viaje"=> $this->viajesModel->getViaje($ID_viaje),
           "carga"=>$this->cargaModel->getCarga($ID_carga), "empleado"=>$this->empleadosModel->getEmpleado($tipoDNI, $numeroDNI));


        echo $this->render->render( "view/proformaRegisterView.php", $data);

    }



    public function insertarDatosEnLaProforma(){
        $numero = $_POST["numero"];
        $fecha = $_POST["fecha"];
        $CUIT = $_POST["CUIT_cliente"];
        $viaje = $_POST["id_viaje"];
        $carga = $_POST["id_carga"];
        $tipoDNI = $_POST["tipoDeDocumento_usuario"];
        $numeroDNI = $_POST["numeroDeDocumento_usuario"];

        $data = array("cliente" => $this->clientesModel->getCliente($CUIT), "viaje"=> $this->viajesModel->getViaje($viaje),
            "carga"=>$this->cargaModel->getCarga($carga), "empleado"=>$this->empleadosModel->getEmpleado($tipoDNI, $numeroDNI));
        $data["numero"]= $numero;
        $data["fecha"]=$fecha;


        if ($this->proformaModel->validarQueElNumeroDeProformaIngresadoNoEsteRegistrado($numero)){

            $this->proformaModel->setDatos($numero, $fecha, $CUIT, $viaje, $carga, $tipoDNI, $numeroDNI);

            echo $this->render->render( "view/imprimirProformaView.php", $data);

        }
        else{
            $data["mensaje"] = "*Número de Proforma existente, ingrese otro.";
            echo $this->render->render( "view/proformaRegisterView.php", $data);
        }


    }

    public function imprimirQR(){
        $numero = $_GET['numero'];

        QRcode::png('http://localhost:7882/grupo14/EditarProforma/editarDatosEnLaProforma?numero='.$numero);
    }

}