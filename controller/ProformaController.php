<?php
include_once("helper/Configuration.php");
include ("./phpqrcode/qrlib.php");

class ProformaController
{
    private ProformaModel $proformaModel;
    private ClientesModel $clientesModel;
    private ViajesModel  $viajesModel;
    private EmpleadosModel $empleadosModel;
    private Render $render;


    public function __construct(ProformaModel $proformaModel, ClientesModel $clientesModel, ViajesModel $viajesModel, EmpleadosModel $empleadosModel, Render $render)
    {
        $this->proformaModel = $proformaModel;
        $this->clientesModel = $clientesModel;
        $this->viajesModel = $viajesModel;
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
        $tipoDNI = $_POST["tipoDeDocumento_usuario"];
        $numeroDNI = $_POST["numeroDeDocumento_usuario"];


        $data = array("cliente" => $this->clientesModel->getCliente($CUIT_cliente), "viaje"=> $this->viajesModel->getViaje($ID_viaje),
           "empleado"=>$this->empleadosModel->getEmpleado($tipoDNI, $numeroDNI));


        echo $this->render->render( "view/proformaRegisterView.php", $data);

    }

    public function insertarDatosEnLaProforma(){
        $numero = $_POST["numero"];
        $fecha = $_POST["fecha"];
        $CUIT = $_POST["CUIT_cliente"];
        $viaje = $_POST["id_viaje"];
        $tipoDNI = $_POST["tipoDeDocumento_usuario"];
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



        if ($this->proformaModel->validarQueElNumeroDeProformaIngresadoNoEsteRegistrado($numero)){

            $this->proformaModel->setDatos($numero, $fecha, $CUIT, $viaje, $tipoDNI, $numeroDNI, $costeoKilometrosEsperado, $costeoCombustibleEsperado,
                $costeoETDEsperado, $costeoETAEsperado, $costeoViaticosEsperado, $costeoPeajesPesajesEsperado, $costeoExtrasEsperado,
                $costeoFEEEsperado, $costeoHazardEsperado, $costeoReeferEsperado);


            header("Location: imprimirProforma?numero=$numero&CUIT=$CUIT&viaje=$viaje&tipoDNI=".md5($tipoDNI)."&numeroDNI=".md5($numeroDNI)."");

        }
        else{
            $data["mensaje"] = "*Número de Proforma existente, ingrese otro.";
           echo $this->render->render( "view/proformaRegisterView.php", $data);
        }


    }

    public function imprimirProforma(){

      $numero = $_GET["numero"];
      $CUIT = $_GET["CUIT"];
      $viaje = $_GET["viaje"];
      $tipoDNI = $_GET["tipoDNI"];
      $numeroDNI = $_GET["numeroDNI"];


       $data =  array("proforma"=> $this->proformaModel->getProforma($numero), "cliente" => $this->clientesModel->getCliente($CUIT), "viaje"=> $this->viajesModel->getViaje($viaje),
            "empleado"=>$this->empleadosModel->getEmpleado($tipoDNI, $numeroDNI));

        echo $this->render->render( "view/imprimirProformaView.php", $data);

    }

    public function imprimirQR(){
        $numero = $_GET['id_viaje'];
        $numeroDocumento = $_GET['numeroDeDocumento_chofer'];
        $tipoDocumento = $_GET['tipoDeDocumento_chofer'];
        QRcode::png('localhost/grupo14/cargasCombustible/registerCargaCombustible?idViaje='.$numero .'&numeroDeDocumento_chofer='.$numeroDocumento.'&tipoDeDocumento_chofer='.$tipoDocumento);
       // QRcode::png('http://localhost/grupo14/EditarProforma/editarDatosEnLaProforma?numero='.$numero);
    }

}