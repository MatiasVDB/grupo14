<?php


require_once("helper/Render.php");
include_once("helper/MySqlDatabase.php");
include_once("helper/Configuration.php");
require_once('third-party/src/Mustache/Autoloader.php');


class ModuleInitializer
{
    private $renderer;
    private $config;
    private $database;

    public function __construct()
    {
        $this->renderer = new Render('view/partial');
        $this->config = new Configuration("config/config.ini");
        $this->database = MySqlDatabase::createDatabaseFromConfig($this->config);
    }

    public function createHomeController()
    {
        include_once("controller/HomeController.php");

        return new HomeController($this->renderer);
    }

    public function createMainController()
    {
        include_once("model/MainModel.php");
        include_once("controller/MainController.php");

        $model = new MainModel($this->database);
        return new MainController($model, $this->renderer);
    }

    public function createRegisterController()
    {
        include_once("model/RegisterModel.php");
        include_once("controller/RegisterController.php");

        $model = new RegisterModel($this->database);
        return new RegisterController($model, $this->renderer);
    }

    public function createLoginController()
    {
        include_once("model/LoginModel.php");
        include_once("controller/LoginController.php");

        $model = new LoginModel($this->database);
        return new LoginController($model, $this->renderer);
    }

    public function createEmpleadosController(){
        include_once("model/EmpleadosModel.php");
        include_once("controller/EmpleadosController.php");

        $model = new EmpleadosModel($this->database);
        return new EmpleadosController($model, $this->renderer);
    }

    public function createTractoresController(){
        include_once("model/TractoresModel.php");
        include_once("controller/TractoresController.php");

        $model = new TractoresModel($this->database);
        return new TractoresController($model, $this->renderer);
    }

    public function createArrastradosController(){
        include_once("model/ArrastradosModel.php");
        include_once("controller/ArrastradosController.php");

        $model = new ArrastradosModel($this->database);
        return new ArrastradosController($model, $this->renderer);
    }

    public function createClientesController(){
        include_once("model/ClientesModel.php");
        include_once("controller/ClientesController.php");

        $model = new ClientesModel($this->database);
        return new ClientesController($model, $this->renderer);
    }

    public function createCargasController(){
        include_once("model/CargasModel.php");
        include_once("controller/CargasController.php");

        $model = new CargasModel($this->database);
        return new CargasController($model, $this->renderer);
    }
    public function createViajesController(){
        include_once("model/ViajesModel.php");
        include_once("controller/ViajesController.php");
        include_once ("model/ArrastradosModel.php");
        include_once ("model/TractoresModel.php");
        include_once ("model/ClientesModel.php");
        include_once ("model/EmpleadosModel.php");
        include_once ("model/CargasCombustibleModel.php");

        $model = new ViajesModel($this->database);
        $modelArrastrados = new ArrastradosModel($this->database);
        $modelTractores = new TractoresModel($this->database);
        $modelClientes = new ClientesModel($this->database);
        $modelEmpleados= new EmpleadosModel($this->database);
        $cargasCombustibleModel= new CargasCombustibleModel($this->database);
        return new ViajesController($model, $modelArrastrados, $modelTractores, $modelClientes, $modelEmpleados, $cargasCombustibleModel, $this->renderer);
    }

    public function createDatosProformaController(){

        include_once ("model/DatosProformaModel.php");
        include_once ("model/ClientesModel.php");
        include_once ("model/ViajesModel.php");
        include_once ("model/CargasModel.php");
        include_once ("model/EmpleadosModel.php");
        include_once ("controller/DatosProformaController.php");

        $model = new DatosProformaModel($this->database);
        $modelClientes = new ClientesModel($this->database);
        $modelViajes = new ViajesModel($this->database);
        $modelEmpleados = new EmpleadosModel($this->database);
        $modelCargas = new CargasModel($this->database);
        return new DatosProformaController($model, $modelClientes, $modelViajes, $modelEmpleados, $modelCargas, $this->renderer);
    }

    public function createProformaController(){
        include_once("model/ProformaModel.php");
        include_once ("model/ClientesModel.php");
        include_once ("model/ViajesModel.php");
        include ("model/CargasModel.php");
        include_once("model/EmpleadosModel.php");
        include_once("controller/ProformaController.php");

        $model = new ProformaModel($this->database);
        $modelClientes = new ClientesModel($this->database);
        $modelViajes = new ViajesModel($this->database);
        $modelCargas = new CargasModel($this->database);
        $modelEmpleados = new EmpleadosModel($this->database);
        return new ProformaController($model, $modelClientes, $modelViajes, $modelCargas, $modelEmpleados, $this->renderer);
    }

    public function createProformasDelChoferController(){
        include_once("model/ProformaModel.php");
        include_once ("model/ClientesModel.php");
        include_once ("model/ViajesModel.php");
        include ("model/CargasModel.php");
        include_once("model/EmpleadosModel.php");
        include_once("controller/ProformasDelChoferController.php");


        $model = new ProformaModel($this->database);
        $modelClientes = new ClientesModel($this->database);
        $modelViajes = new ViajesModel($this->database);
        $modelCargas = new CargasModel($this->database);
        $modelEmpleados = new EmpleadosModel($this->database);
        return new ProformasDelChoferController($model, $modelClientes, $modelViajes, $modelCargas, $modelEmpleados, $this->renderer);
    }

    public function createEditarProformaController(){
        include_once("model/EditarProformaModel.php");
        include_once("controller/EditarProformaController.php");

        $model = new EditarProformaModel($this->database);
        return new EditarProformaController($model, $this->renderer);
    }

    public function createCargasCombustibleController(){
        include_once("model/CargasCombustibleModel.php");
        include_once("controller/CargasCombustibleController.php");

        $model = new CargasCombustibleModel($this->database);
        return new CargasCombustibleController($model, $this->renderer);
    }

    public function createMantenimientoController(){
        include_once ("model/MantenimientoModel.php");
        include_once ("model/TractoresModel.php");
        include_once ("model/FechaServiceModel.php");
        include_once ("controller/MantenimientoController.php");
        $model = new MantenimientoModel($this->database);
        $modelFechaService = new FechaServiceModel($this->database);
        $modelTractores = new TractoresModel($this->database);
        return new MantenimientoController($model, $modelTractores, $modelFechaService,  $this->renderer);

    }

    public function createServicesController(){

        include_once ("model/ServiceModel.php");
        include_once ("model/FechaServiceModel.php");
        include_once ("model/TractoresModel.php");
        include_once ("model/EmpleadosModel.php");
        include_once ("controller/ServiceController.php");

        $model = new ServiceModel($this->database);
        $modelFechaService = new FechaServiceModel($this->database);
        $modelTractores = new TractoresModel($this->database);
        $modelEmpleados = new EmpleadosModel($this->database);
        return new ServiceController($model, $modelFechaService, $modelTractores, $modelEmpleados, $this->renderer);

    }


    public function createDefaultController()
    {

        return $this->createHomeController();
    }



}