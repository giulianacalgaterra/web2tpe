<?php
require_once "./VeterinariaModel/VeterinariaModel.php";
require_once "./VeterinariaView/VeterinariaView.php";

class VeterinariaController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new VeterinariaModel();
        $this->view = new VeterinariaView();
    }

    function showHome(){
        $clientes = $this->model->getClientes();
        $mascotas = $this->model->getMascotas();
        $this->view->showClientes($clientes, $mascotas);
    }

    function viewCliente($dni){
        $clientes = $this->model->getClientes($dni);
        $this->view->showCliente($clientes);
    }

    function createCliente(){
        $this->model->insertCliente($_POST[NULL], $_POST['nombre'], $_POST['apellido'], $_POST['dni']);
        $this->model->insertMascotas($_POST[NULL], $_POST['nombre'], $_POST['dni_cliente']);
        $clientes=$this->model->getClientes();
        $mascotas=$this->model->getMascotas();
        $this->view->ingresar($clientes, $mascotas);
        $this->view->showClienteLocation();
    }

    function ingresarCliente(){
        $clientes=$this->model->getClientes();
        $mascotas=$this->model->getMascotas();
        $this->view->ingresar($clientes, $mascotas);
    }
}