<?php

class ClientesModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=veterinaria;charset=utf8', 'root', 'giuliana1492');
    }

    //trae toda la tabla clientes
    function getClientes(){
        $sentencia = $this->db->prepare( "select * from clientes "); 
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    //mostrar un cliente
    function getClienteYsusDatos($dni){
        $sentencia = $this->db->prepare( "SELECT c.dni, c.nombre, c.apellido, c.fecha_de_alta, c.fecha_de_actualizacion FROM clientes c WHERE c.dni=${dni};");
        $sentencia->execute(array($dni));
        $tareas = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tareas;
    }

     //eliminar un cliente
     function deleteClienteFromDB($dni){
        $sentencia = $this->db->prepare("DELETE FROM clientes  WHERE cliente.dni =${dni}");
        $sentencia->execute(array($dni));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
}