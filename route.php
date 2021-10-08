<?php
require_once "./VeterinariaController/VeterinariaController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

$VeterinariaController = new VeterinariaController();


// determina que camino seguir según la acción
 switch ($params[0]) {
     case 'home': 
        $VeterinariaController->showHome();
        break;
    case 'createCliente': 
        $VeterinariaController->createCliente(); 
        break;
    case 'ingresar':
        $VeterinariaController->ingresarCliente();
        break;

    case 'viewcliente':
            $VeterinariaController->viewCliente($params[1]);
            break;
    case 'viewmascotas':
            $VeterinariaController->viewMascota($params[1], $params[2]);
                break;
    default: 
        echo('404 Page not found'); 
        break;
 }


?>