<?php
require_once "./MascotasModel/MascotasModel.php";
require_once "./MascotasView/MascotasView.php";

class MascotasController{

    private $model;
    private $view;

    //construye las modelos el view
    function __construct(){
        $this->model = new MascotasModel();
        $this->view = new MascotasView();
    }
    //funcion mostrar todas las mascotas
    function viewMascotas(){
        $todasLasMascotas = $this->model->getMascotas();
        $this->view->showMascotas($todasLasMascotas);
        
    }

    //funcion mostrar una mascota por id
    function showMascotaYsusDatos($id){
        $showMascotaYsusDatos = $this->model->getMascotaYsusDatos($id);
        $this->view->showMascota($showMascotaYsusDatos);
    }






    
   
}