<?php
require_once "./VeterinariaModel/MascotasModel.php";
require_once "./VeterinariaView/MascotasView.php";


class MascotasController{

    private $model;
    private $view;

    //construye las modelos el view
    function __construct(){
        $this->model = new MascotasModel();
        $this->view = new MascotasView();

    }
    //funcion ver todas las mascotas
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