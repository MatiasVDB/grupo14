<?php
include_once("helper/Configuration.php");
include ("./phpqrcode/qrlib.php");

class ProformaController
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
        $carga = $_POST["id_carga"];
        $numeroDNI = $_POST["numeroDeDocumento_usuario"];

        $data = array("cliente" => $this->clientesModel->getCliente($CUIT_cliente), "viaje"=> $this->viajesModel->getViaje($ID_viaje),
           "carga"=>$this->cargasModel->getCarga($carga),"empleado"=>$this->empleadosModel->getEmpleadoDNI($numeroDNI));

        echo $this->render->render( "view/proformaRegisterView.php", $data);

    }

    public function insertarDatosEnLaProforma(){
        $numero = $_POST["numero"];
        $fecha = $_POST["fecha"];
        $CUIT = $_POST["CUIT_cliente"];
        $viaje = $_POST["id_viaje"];
        $numeroDNI = $_POST["numeroDeDocumento_usuario"];
        $costeoKilometrosEsperado = $_POST["kilometrosCosteoEsperado"];
        $costeoCombustibleEsperado = $_POST["combustibleCosteoEsperado"];
        $costeoETDEsperado = $_POST["etdCosteoEsperado"];
        $costeoETAEsperado = $_POST["etaCosteoEsperado"];
        $costeoViaticosEsperado = $_POST["viaticosCosteoEsperado"];
        $costeoPeajesPesajesEsperado = $_POST["peajesPesajesCosteoEsperado"];
        $costeoExtrasEsperado= $_POST["extrasCosteoEsperado"];
        $costeoFEEEsperado = $_POST["feeCosteoEsperado"];
        $costeoHazardEsperado = $_POST["hazardCosteoEsperado"];
        $costeoReeferEsperado = $_POST["reeferCosteoEsperado"];


//        echo("$numero, $fecha, $CUIT, $viaje,  $numeroDNI --,$costeoKilometrosEsperado, $costeoCombustibleEsperado,
//        $costeoETDEsperado,$costeoETAEsperado, $costeoViaticosEsperado, $costeoPeajesPesajesEsperado,$costeoExtrasEsperado
//        ,$costeoFEEEsperado, $costeoHazardEsperado,$costeoReeferEsperado
//        ");

        echo ("1");
        if ($this->proformaModel->validarQueElNumeroDeProformaIngresadoNoEsteRegistrado($numero)){
            echo ("2");

            $this->proformaModel->setDatos($numero, $fecha, $CUIT, $viaje, $numeroDNI, $costeoKilometrosEsperado, $costeoCombustibleEsperado,
                $costeoETDEsperado, $costeoETAEsperado, $costeoViaticosEsperado, $costeoPeajesPesajesEsperado, $costeoExtrasEsperado,
                $costeoFEEEsperado, $costeoHazardEsperado, $costeoReeferEsperado);


            //header("Location: imprimirProforma?numero=$numero&CUIT=$CUIT&viaje=$viaje&numeroDNI=$numeroDNI");
            echo ("3");

        }
        else{
            echo ("4");

            $data["mensaje"] = "*Número de Proforma existente, ingrese otro.";
           //echo $this->render->render( "view/proformaRegisterView.php", $data);
        }
        echo ("5");


    }

    public function imprimirProforma(){

      $numero = $_GET["numero"];
      $CUIT = $_GET["CUIT"];
      $viaje = $_GET["viaje"];

      $numeroDNI = $_GET["numeroDNI"];


       $data =  array("proforma"=> $this->proformaModel->getProforma($numero), "cliente" => $this->clientesModel->getCliente($CUIT), "viaje"=> $this->viajesModel->getViaje($viaje),
           "empleado"=>$this->empleadosModel->getEmpleado($numeroDNI));

        echo $this->render->render( "view/imprimirProformaView.php", $data);

    }

    public function imprimirQR(){
        $numero = $_GET['id_viaje'];
        $numeroDocumento = $_GET['numeroDeDocumento_chofer'];
        //$tipoDocumento = $_GET['tipoDeDocumento_chofer'];
        QRcode::png('localhost/grupo14/cargasCombustible/registerCargaCombustible?idViaje='.$numero .'&numeroDeDocumento_chofer='.$numeroDocumento);
        // QRcode::png('http://localhost/grupo14/EditarProforma/editarDatosEnLaProforma?numero='.$numero)
    }

}