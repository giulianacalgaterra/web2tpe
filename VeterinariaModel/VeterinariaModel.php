<?php

class VeterinariaModel{

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

    //agregar un cliente
    function insertCliente($nombre, $apellido, $dni){
        $sentencia = $this->db->prepare("INSERT INTO clientes  (nombre, apellido, dni) VALUES (?,?, ?)");
        $sentencia->execute(array($nombre,$apellido,$dni));
    }
    //eliminar un cliente
    function deleteClienteFromDB($dni){
        $sentencia = $this->db->prepare("DELETE FROM clientes  WHERE cliente.dni = ?");
        $sentencia->execute(array($dni));
    }
    //modificar un cliente
    function updateClienteFromDB($nombre, $apellido, $dni){
        $sentencia = $this->db->prepare("UPDATE  clientes  SET nombre=?,apellido=?,dni=? WHERE clientes.dni = ?");
        $sentencia->execute(array($nombre, $apellido, $dni));
    }

    //trae toda la tabla mascotas
    function getMascotas(){
        $sentencia = $this->db->prepare( "select * from mascotas ");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    //muestra una mascota
    function getMascotaA($nombre){
        $sentencia = $this->db->prepare( "select * from mascotas  WHERE nombre=?");
        $sentencia->execute(array($nombre));
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    function getMascotaB($dni_cliente){
        $sentencia = $this->db->prepare( "select * from mascotas  WHERE dni_cliente=?");
        $sentencia->execute(array($dni_cliente));
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    
    //agregar una mascota
    function insertMascotas($nombre, $dni_cliente){
        $sentencia = $this->db->prepare("INSERT INTO mascotas  (nombre, dni_cliente) VALUES (?,?)");
        $sentencia->execute(array($nombre,$dni_cliente));
    }

    //modificar una mascota
    function updateMascotasFromDB($nombre, $id){
        $sentencia = $this->db->prepare("UPDATE  mascotas  SET nombre=?, dni_cliente=? WHERE cliente.dni = ?");
        $sentencia->execute(array($nombre, $id));
    }
}