<?php

class VeterinariaController{

    private $model;
    private $view;
/*
    //construye las modelos el viwe
    function __construct(){
        $this->model = new VeterinariaModel();
        $this->view = new VeterinariaView();
    }

    //funcion mostrar toda la tabla
    function showMascotaConCliente(){
        $clientesConMascotas = $this->model->getMascotasConClientes();
        $this->view->showMascotaConCliente($clientesConMascotas);
    }

    //funcion mostrar un cliente     
    function viewCliente($dni){
        $clientes = $this->model->getClientes($dni);
        $this->view->showCliente($clientes);
    }
    //funcion crear un cliente y su mascota
    function createCliente(){
        $this->model->insertCliente($_POST[NULL], $_POST['nombre'], $_POST['apellido'], $_POST['dni']);
        $this->model->insertMascotas($_POST[NULL], $_POST['nombre'], $_POST['dni_cliente']);
        $clientes=$this->model->getClientes();
        $mascotas=$this->model->getMascotas();
        $this->view->ingresar($clientes, $mascotas);
        $this->view->showClienteLocation();
        //$this->view->showClientes($clientes, $mascotas);
    }
    //funcion ingresar un cliente y su mascota
    function ingresarCliente(){
        $clientes=$this->model->getClientes();
        $mascotas=$this->model->getMascotas();
        $this->view->ingresar($clientes, $mascotas);
    }
*/
    
   
}