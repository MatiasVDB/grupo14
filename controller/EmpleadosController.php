<?php

include_once("helper/Configuration.php");

class EmpleadosController
{
    private EmpleadosModel $empleadoModel;
    private Render $render;


    public function __construct($empleadoModel, $render)
    {
        $this->empleadoModel = $empleadoModel;
        $this->render = $render;
    }

    public function index()
    {
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or $_SESSION['logueado'] == 2) {
            switch ($_SESSION['logueado']) {

                case 2:
                    $data['actualizar'] = "disabled";
                    break;


                case 4:

                    break;


            }

            $data["empleados"] = $this->empleadoModel->getEmpleadosConNivelDeRol();
            echo $this->render->render("view/empleadosView.php", $data);

        } else {

            header("Location: main");
        }
    }

    public function getEmpleadosPorRol()
    {

        $rol = $_GET["rol"];
        $numeroDNI = $_GET["rol"];

        $data["empleado"] = $this->empleadoModel->getEmpleadosPorRol($numeroDNI, $rol);
        echo $this->render->render("view/empleadoDetalleView.php", $data);
    }

    public function detalle()
    {

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4) {
            $numeroDocumento = $_GET["numeroDeDocumento"];


            $data["empleado"] = $this->empleadoModel->getEmpleadoConNivelDeRol($numeroDocumento);
            echo $this->render->render("view/empleadoDetalleView.php", $data);
        } else {
            header("Location: ../main");
        }

    }

    public function procesarActualizacionEmpelado()
    {
        $numeroDeDocumento = $_POST ['numeroDeDocumento'];
        $nombre = $_POST ['nombre'];
        $fechaDeNacimiento = $_POST['fechaDeNacimiento'];
        $email = $_POST['email'];
        $rolUsuario = $_POST['rolUsuario'];


        $this->empleadoModel->modificarEmpleado($numeroDeDocumento, $nombre, $fechaDeNacimiento, $email, $rolUsuario);

        header("Location: ../empleados");
    }

    public function eliminar()
    {

        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 2 or $_SESSION['logueado'] == 4) {

            $numeroDocumento = $_GET["numeroDeDocumento"];

            $this->empleadoModel->eliminar($numeroDocumento);

            header("Location: ../empleados");

        } else {
            header("Location: ../main");
        }


    }

}