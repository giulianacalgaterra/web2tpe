<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class VeterinariaView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showMascotaConCliente($clientesConMascotas){
        $this->smarty->assign('clientesConMascotas', $clientesConMascotas);
        $this->smarty->display('templates/showMascotaConCliente.tpl');
    }

    function ingresar($clientes, $mascotas){
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('mascotas', $mascotas);
        $this->smarty->display('templates/createCliente.tpl');
     }
     
     function showClienteLocation(){
        header("Location: ".BASE_URL."ingresar");
    }

    function showCliente($clientes){
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->display('templates/cliente.tpl');
     }

     
}
