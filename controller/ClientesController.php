<?php

include_once("helper/Configuration.php");

class ClientesController
{
    private ClientesModel $clienteModel;
    private Render $render;


    public function __construct( $clienteModel,  $render)
    {
        $this->clienteModel = $clienteModel;
        $this->render = $render;
    }

    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4){

            $data["clientes"] = $this->clienteModel->getClientes();
            echo $this->render->render( "view/clientesView.php", $data );
        }
        else{
            header("Location: main");
        }
    }

    public function detalle(){

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4){
        $cuit = $_GET["CUIT"];

        $data["cliente"] = $this->clienteModel->getCliente($cuit);
        echo $this->render->render( "view/clienteDetalleView.php", $data );
    }

        else{
            header("Location: main");
        }

    }

    public function procesarActualizacionCliente(){
        $cuit = $_POST['cuit'];
        $denominacion = $_POST ['denominacion'];
        $contacto1 = $_POST ['contacto1'];
        $contacto2 = $_POST['contacto2'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $this->clienteModel->modificarCliente($cuit, $denominacion, $contacto1, $contacto2,$telefono ,$direccion , $email);

        header("Location: ../clientes");
    }

    public function registerCliente(){

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            echo $this->render->render("view/registerCliente.php");
        }
        else{
            header("Location: ../main");
        }
    }

    public function registrarCliente(){

        $cuit = $_POST['cuit'];
        $denominacion = $_POST ['denominacion'];
        $contacto1 = $_POST ['contacto1'];
        $contacto2 = $_POST['contacto2'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];


        $this->clienteModel->createCliente($cuit, $denominacion, $email,$contacto1, $contacto2,$telefono ,$direccion );

        header("Location: ../clientes");
    }

    public function eliminar(){
        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {
            $cuit = $_GET["CUIT"];

            $this->clienteModel->eliminar($cuit);

            header("Location: ../clientes");

        }else{

            header("Location: ../main");

        }

    }
}