<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class MascotasView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    
    function showMascotas($todasLasMascotas){
        $this->smarty->assign('todasLasMascotas', $todasLasMascotas);
        $this->smarty->display('templates/detalleMascotas.tpl');
    }

    function showMascota($showMascotaYsusDatos){
        $this->smarty->assign('showMascotaYsusDatos', $showMascotaYsusDatos);
        $this->smarty->display('templates/MascotaYsusDatos.tpl');
    }
}