<?php
require_once('third-party/src/Mustache/Autoloader.php');


class Render
{
    private $mustache;
    public function __construct($partialsPathLoader)
    {
        Mustache_Autoloader::Register();
        $this->mustache = new Mustache_Engine(array(
           'partials_loader' => new Mustache_Loader_FilesystemLoader($partialsPathLoader)
        ));
    }

    public function render($contentFile, $data = array()){
        $contentAsString = file_get_contents($contentFile);
        return $this->mustache->render($contentAsString, $data);
    }
}