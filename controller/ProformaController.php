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
        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {
            $data = array("proformas" => $this->proformaModel->getProformas());
            echo $this->render->render( "view/proformasView.php", $data);
        }
        else{
            header("Location: main");
        }
    }

    public function mostrarDatosEnLaProforma()
    {


        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            $CUIT_cliente = $_POST["CUIT_cliente"];
            $ID_viaje = $_POST["id_viaje"];
            $carga = $_POST["id_carga"];
            $numeroDNI = $_POST["numeroDeDocumento_usuario"];
            $data = array("cliente" => $this->clientesModel->getCliente($CUIT_cliente), "viaje" => $this->viajesModel->getViaje($ID_viaje),
                "carga" => $this->cargasModel->getCarga($carga), "empleado" => $this->empleadosModel->getEmpleadoDNI($numeroDNI));

            echo $this->render->render("view/proformaRegisterView.php", $data);

        }

        else{
            header("Location: main");
        }

    }

    public function insertarDatosEnLaProforma(){
        $numero = $_POST["numero"];
        $fecha = $_POST["fecha"];
        $CUIT = $_POST["CUIT_cliente"];
        $viaje = $_POST["id_viaje"];
        $carga = $_POST["id_carga"];
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
        if ($this->proformaModel->validarQueElNumeroDeProformaIngresadoNoEsteRegistrado($numero)){
            $this->proformaModel->setDatos($numero, $fecha, $CUIT, $viaje, $numeroDNI, $carga,$costeoKilometrosEsperado, $costeoCombustibleEsperado,
                $costeoETDEsperado, $costeoETAEsperado, $costeoViaticosEsperado, $costeoPeajesPesajesEsperado, $costeoExtrasEsperado,
                $costeoFEEEsperado, $costeoHazardEsperado, $costeoReeferEsperado);
            //header("Location: imprimirProforma?numero=$numero&CUIT=$CUIT&viaje=$viaje&numeroDNI=$numeroDNI&carga=$carga");

            header("Location: ../proforma");
        }
        else{
            $data["mensaje"] = "*Número de Proforma existente, ingrese otro.";
        }
    }

    public function imprimirProforma(){

      $numero = $_GET["numero"];
      $CUIT = $_GET["CUIT"];
      $viaje = $_GET["viaje"];
      $carga = $_GET["carga"];
      $numeroDNI = $_GET["numeroDNI"];


       $data =  array("proforma"=> $this->proformaModel->getProforma($numero), "cliente" => $this->clientesModel->getCliente($CUIT), "viaje"=> $this->viajesModel->getViaje($viaje),
           "empleado"=>$this->empleadosModel->getEmpleado($numeroDNI),"carga"=>$this->cargasModel->getCarga($carga));

       echo $this->render->render( "view/imprimirProformaView.php", $data);
    }

    public function eliminar(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 1 or $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            $numeroProforma = $_GET["numeroProforma"];

            $this->proformaModel->eliminar($numeroProforma);

            header("Location: ../proforma");

        }

        else{

            header("Location: main");
        }
    }

    public function detalle(){
        $numero= $_GET["numero"];

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 1 or $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {
            $data = array("clientes" => $this->clientesModel->getClientes(), "viajes" => $this->viajesModel->getViajes(), "empleados" => $this->empleadosModel->getChoferes(),
                "cargas" => $this->cargasModel->getCargas() , "proforma" => $this->proformaModel->getProforma($numero));

            echo $this->render->render("view/proformaDetalleView.php", $data);
        }
        else{
            header("Location: main");
        }
    }
    public function procesarActualizacionProforma(){
        $numero = $_POST["numero"];
        $CUIT = $_POST["CUIT_cliente"];
        $viaje = $_POST["id_viaje"];
        $carga = $_POST["id_carga"];
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


        echo("$numero, $CUIT, $viaje,  $numeroDNI --,$costeoKilometrosEsperado, $costeoCombustibleEsperado,
        $costeoETDEsperado,$costeoETAEsperado, $costeoViaticosEsperado, $costeoPeajesPesajesEsperado,$costeoExtrasEsperado
        ,$costeoFEEEsperado, $costeoHazardEsperado,$costeoReeferEsperado
        ");

            $this->proformaModel->modificarDatos($numero, $CUIT, $viaje, $numeroDNI, $carga,$costeoKilometrosEsperado, $costeoCombustibleEsperado,
                $costeoETDEsperado, $costeoETAEsperado, $costeoViaticosEsperado, $costeoPeajesPesajesEsperado, $costeoExtrasEsperado,
                $costeoFEEEsperado, $costeoHazardEsperado, $costeoReeferEsperado);
            header("Location: http://localhost/grupo14/proforma");

    }


    public function imprimirQR(){
        $numero = $_GET['id_viaje'];
        $numeroDocumento = $_GET['numeroDeDocumento_chofer'];
        QRcode::png('localhost/grupo14/cargasCombustible/registerCargaCombustible?idViaje='.$numero .'&numeroDeDocumento_chofer='.$numeroDocumento);
        //localhost/grupo14/cargasCombustible/registerCargaCombustible?id_viaje=2&numeroDeDocumento_chofer=41214566
        // QRcode::png('http://localhost/grupo14/EditarProforma/editarDatosEnLaProforma?numero='.$numero)
    }

}