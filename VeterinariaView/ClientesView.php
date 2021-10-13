<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class ClientesView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    
    function showClientes($todosLosClientes){
        $this->smarty->assign('todosLosClientes', $todosLosClientes);
        $this->smarty->display('templates/detalleCliente.tpl');
    }

    function showCliente($showClienteYsusDatos){
        $this->smarty->assign('showClienteYsusDatos', $showClienteYsusDatos);
        $this->smarty->display('templates/showClienteYsusDatos.tpl');
    }

    function deleteCliente($deleteClienteYsusDatos){
        $this->smarty->assign('$deleteClienteYsusDatos', $deleteClienteYsusDatos);
        $this->smarty->display();
    }
}