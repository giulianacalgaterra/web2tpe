<?php
require_once "./VeterinariaModel/VeterinariaModel.php";
//require_once "./VeterinariaView/VeterinariaView.php";

class VeterinariaController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new VeterinariaModel();
        //$this->view = new VeterinariaView();
    }

    function showHome(){
        $clientes = $this->model->getClientes();
        $mascotas = $this->model->getMascotas();
        //$this->view->showClientes($clientes, $mascotas);
    }
    
}