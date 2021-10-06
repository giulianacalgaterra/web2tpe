<?php

class VeterinariaModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=veterinaria;charset=utf8', 'root', 'giuliana1492');
    }
    //trae toda la tabla clientes
    function getClientes(){
        $sentencia = $this->db->prepare( "select * from clientes c"); 
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    //mostrar un cliente

    //agregar un cliente
    function isertCliente($nombre, $apellido, $dni){
        $sentencia = $this->db->prepare("INSERT INTO clientes (nombre, apellido, dni) VALUES (?,?, ?, ?, ?, ?)");
        $sentencia->execute(array($nombre,$apellido,$dni));
    }
    //eliminar un cliente
    function deleteClienteFromDB($dni){
        $sentencia = $this->db->prepare("DELETE FROM clientes WHERE cliente.dni = ?");
        $sentencia->execute(array($dni));
    }
    //modificar un cliente
    function updateClienteFromDB($nombre, $apellido, $dni){
        $sentencia = $this->db->prepare("UPDATE  clientes SET nombre=?,apellido=?,dni=? WHERE clientes.dni = ?");
        $sentencia->execute(array($nombre, $apellido, $dni));
    }

    //trae toda la tabla mascotas
    function getMascotas(){
        $sentencia = $this->db->prepare( "select * from mascotas m");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    

}