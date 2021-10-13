<?php
require_once "./VeterinariaModel/ClientesModel.php";
require_once "./VeterinariaView/ClientesView.php";

class ClientesController{

    private $model;
    private $view;
  
    //construye las modelos el view
    function __construct(){
        $this->model = new ClientesModel();
        $this->view = new ClientesView();
        
    }
    //funcion mostrar todos los clientes
    function viewClientes(){
        $todosLosClientes = $this->model->getClientes();
        $this->view->showClientes($todosLosClientes);
        
    }

    //funcion mostrar un cliente por dni
    function showClienteYsusDatos($dni){
        $showClienteYsusDatos = $this->model->getClienteYsusDatos($dni);
        $this->view->showCliente($showClienteYsusDatos);
    }

    //funcion eliminar un cliente por dni
    function deleteClienteYsusDatos($dni){
       $deleteClienteYsusDatos = $this->model->deleteClienteFromDB($dni);
       $this->view->deleteCliente($deleteClienteYsusDatos); 
    }
  
}