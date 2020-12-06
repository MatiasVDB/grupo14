<?php
include_once("helper/Configuration.php");

class EditarProformaController
{
    private EditarProformaModel $editarProformaModel;

    private Render $render;


    public function __construct(EditarProformaModel $editarProformaModel, Render $render)
    {
        $this->editarProformaModel = $editarProformaModel;
        $this->render = $render;
    }
    public function index()
    {

            echo $this->render->render("view/editarProformaView.php");


    }

    public function editarDatosEnLaProforma(){
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 4 or 1) {

                $numero= $_GET["numero"];
                $data["proforma"]= $this->editarProformaModel->buscarProformaPorID($numero);



            echo $this->render->render( "view/editarProformaView.php", $data);


        }

        else{
            header("Location: main");
        }
    }
}