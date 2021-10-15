<?php
require_once "./Model/ClientesModel.php";
require_once "./View/ClientesView.php";
require_once "./Model/MascotasModel.php";
require_once "./View/MascotasView.php";
require_once "./Model/userModel.php";

class ClientesController{

    private $model;
    private $view;
    private $mascotasModel;
    private $mascotasView;
    private $userModel;

    //construye las modelos el view
    function __construct(){
        $this->model = new ClientesModel();
        $this->view = new ClientesView();
        $this->mascotasModel = new mascotasModel();
        $this->mascotasView = new mascotasView();
        $this->userModel = new userModel();
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

   //funcion mostrar un cliente y sus mascotas
    function showClientesYsusMascotas(){
        $todosLosClientes = $this->model->getClientes();
        $todasLasMascotas = $this->mascotasModel->getMascotas(); 
        $isLogged = $this->userModel->isLogged();
        $this->view->showClientesYsusMascotas($todosLosClientes, $todasLasMascotas, $isLogged);
       
    }
   
    //funcion eliminar un cliente por dni
   function deleteClienteYsusDatos($dni){
    $deleteClienteYsusDatos = $this->model->deleteClienteFromDB($dni);
    $this->view->deleteCliente($deleteClienteYsusDatos); 
    }

    
}