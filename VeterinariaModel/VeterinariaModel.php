<?php

class VeterinariaModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=veterinaria;charset=utf8', 'root', 'giuliana1492');
    }
    
    
    //muestra las mascotas con sus clientes.
    function getMascotasConClientes (){
        $sentencia = $this->db->prepare( "SELECT c.nombre AS nombre_cliente, c.apellido, c.dni, c.fecha_de_alta, c.fecha_de_actualizacion, m.nombre AS nombre_mascota, m.id, m.dni_cliente, m.fecha_de_alta, m.fecha_de_actualizacion FROM clientes c INNER JOIN mascotas m  ON  c.dni = m.dni_cliente"); 
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    

    //agregar un cliente
    function insertCliente($nombre, $apellido, $dni){
        $sentencia = $this->db->prepare("INSERT INTO clientes  (nombre, apellido, dni) VALUES (?,?, ?)");
        $sentencia->execute(array($nombre,$apellido,$dni));
    }
   
    //modificar un cliente
    function updateClienteFromDB($nombre, $apellido, $dni){
        $sentencia = $this->db->prepare("UPDATE  clientes  SET nombre=?,apellido=?,dni=? WHERE clientes.dni = ?");
        $sentencia->execute(array($nombre, $apellido, $dni));
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