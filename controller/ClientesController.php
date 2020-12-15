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
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 2 or 1){
            switch ($_SESSION['logueado']){

                case 1:
                    $data['empleadosNav']= "disabled";
                    $data['viajesNav']= "disabled";
                    $data['cargarProformaNav']="disabled";
                    $data['registrarTractorNav']="disabled";
                    $data['registrarArrastradoNav']="disabled";
                    $data['proformasNav']="disabled";
                    $data['servicesNav']="disabled";
                    $data['actualizarCliente']="disabled";
                    $data['borrarCliente']="disabled";
                    $data['agregarCliente']="disabled";
                    break;



            }
            $data["clientes"] = $this->clienteModel->getClientes();
            echo $this->render->render( "view/clientesView.php", $data );
        }
        else{
            header("Location: main");
        }
    }

    public function detalle(){


        $cuit = $_GET["CUIT"];

        $data["cliente"] = $this->clienteModel->getCliente($cuit);
        echo $this->render->render( "view/clienteDetalleView.php", $data );
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

        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 4 or 2) {

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

        $this->clienteModel->createCliente($cuit, $denominacion, $contacto1, $contacto2,$telefono ,$direccion , $email);

        header("Location: ../clientes");
    }

    public function eliminar(){
        if (isset($_SESSION['logueado']) and $_SESSION['logueado'] == 4 or 2) {
            $cuit = $_GET["CUIT"];

            $this->clienteModel->eliminar($cuit);

            header("Location: ../clientes");

        }else{

            header("Location: ../main");

        }

    }
}