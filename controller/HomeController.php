<?php


class HomeController
{
    private Render $renderer;

    public function __construct($renderer){
        $this->renderer = $renderer;
    }

    public function index(){

        echo $this->renderer->render( "view/homeView.php");
    }
}