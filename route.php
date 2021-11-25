<?php
require_once "./Controller/MascotasController.php";
require_once "./Controller/ClientesController.php";
require_once "./Controller/LoginController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'detalle-de-cliente'; // acción por defecto si no envían
}


$params = explode('/', $action);

$MascotasController = new MascotasController();
$ClientesController = new ClientesController();
$LoginController = new LoginController();

// determina que camino seguir según la acción
 switch ($params[0]) {
     
     //muestra todas las mascotas
    case 'detalle-de-mascota': 
        $MascotasController->viewMascotas();
        break;
     
     //muestra una mascota y sus datos
     case 'mascota-y-sus-datos': 
        $MascotasController->showMascotaYsusDatos($params[1]);
        break;  

    //muestra todos los clientes
    case 'detalle-de-cliente': 
        $ClientesController->viewClientes();
        break;

    //muestra un cliente y sus datos
    case 'cliente-y-sus-datos': 
        $ClientesController->showClienteYsusDatos($params[1]);
        break;
        
    //muestra clientes y sus mascotas
    case 'clientes-y-sus-mascotas': 
        $ClientesController->showClientesYsusMascotas();
        break;    
        

    case 'login': 
            $LoginController->login();
            break;
    case 'logout': 
            $LoginController->logout();
            break;
        case 'verify': 
            $LoginController->verifyLogin();
            break;
        case 'createUser':
            $LoginController->createUser();
            break;
        case 'createLogin':
            $LoginController->createLogin();
            break;  
            
        case 'deleteClienteYsusDatos': 
            $ClientesController->deleteClienteYsusDatos($params[1]); 
            break;
        
        /*
       //muestra todos los items cargados
    case 'mascota-con-cliente': 
        $VeterinariaController->showMascotaConCliente();
        break;
    case 'createCliente': 
        $VeterinariaController->createCliente(); 
        break;
    case 'ingresar-nuevo':
        $VeterinariaController->ingresarCliente();
        break;

    case 'viewcliente':
            $VeterinariaController->viewCliente($params[1]);
            break;
    /*case 'viewmascotas':
            $VeterinariaController->viewMascota($params[1], $params[2]);
                break;*/
    default: 
        echo('404 Page not found'); 
        break;
 }


?>