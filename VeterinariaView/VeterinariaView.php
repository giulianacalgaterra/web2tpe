<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class VeterinariaView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showClientes($clientes,$mascotas){
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('mascotas', $mascotas);
        $this->smarty->display('templates/home.tpl');
    }

}