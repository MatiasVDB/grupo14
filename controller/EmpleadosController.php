<?php

include_once("helper/Configuration.php");

class EmpleadosController
{
    private EmpleadosModel $empleadoModel;
    private Render $render;


    public function __construct( $empleadoModel,  $render)
    {
        $this->empleadoModel = $empleadoModel;
        $this->render = $render;
    }

    public function index(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4){

        $data = array("empleados"=>$this->empleadoModel->getEmpleadosConNivelDeRol());
        echo $this->render->render( "view/empleadosView.php", $data );

        }

        else{

            header("Location: main");
        }
    }

    public function getEmpleadosPorRol(){

        $rol = $_GET["rol"];

        $data["empleado"] = $this->empleadoModel->getEmpleadosPorRol($rol);
        echo $this->render->render( "view/empleadoDetalleView.php", $data);
    }

    public function detalle(){
        $tipoDocumento = $_GET["tipoDocumento"];
        $numeroDocumento = $_GET["numeroDeDocumento"];


        $data["empleado"] = $this->empleadoModel->getEmpleado($tipoDocumento, $numeroDocumento);
        echo $this->render->render( "view/empleadoDetalleView.php", $data );
    }

    public function procesarActualizacionEmpelado(){
        $tipoDeDocumento = $_POST['tipoDocumento'];
        $numeroDeDocumento = $_POST ['numeroDeDocumento'];
        $nombre = $_POST ['nombre'];
        $fechaDeNacimiento = $_POST['fechaDeNacimiento'];
        $email = $_POST['email'];
        $rolUsuario = $_POST['rolUsuario'];



        $this->empleadoModel->modificarEmpleado($tipoDeDocumento, $numeroDeDocumento, $nombre, $fechaDeNacimiento, $email, $rolUsuario);

        header("Location: ../empleados");
    }

    public function eliminar(){
        $tipoDocumento = $_GET["tipoDocumento"];
        $numeroDocumento = $_GET["numeroDeDocumento"];

        $this->empleadoModel->eliminar($tipoDocumento, $numeroDocumento);

        header("Location: ../empleados");

    }


}