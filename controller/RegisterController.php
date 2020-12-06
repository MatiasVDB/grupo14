<?php



class RegisterController
{

    private RegisterModel $registerModel;
    private Render $render;


    public function __construct($registerModel, $render)
    {
        $this->registerModel = $registerModel;
        $this->render = $render;

    }

    public function index()
    {


        echo $this->render->render("view/registerView.php");


    }

    public function procesarFormulario()
    {

        $tipoDeDocumento = $_POST['tipoDocumento'];
        $numeroDeDocumento = $_POST ['nroDocumento'];
        $nombre = $_POST ['nombre'];
        $password = $_POST['password'];
        $fechaDeNacimiento = $_POST['fechaDeNacimiento'];
        $email = $_POST['email'];


        if ($this->registerModel->validarQueElEmailIngresadoNoEsteRegistrado($email)) {

            $this->registerModel->ingresarUsuarioALaBD($tipoDeDocumento, $numeroDeDocumento, $nombre, $password, $fechaDeNacimiento, $email);

            header("Location: ../home");

        }

        else{

            $mensaje["registro"] = "Este mail ya se encuentra registrado";

            echo $this->render->render("view/homeView.php", $mensaje);
        }

    }

}