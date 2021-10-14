<?php

class MascotasModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=veterinaria;charset=utf8', 'root', 'giuliana1492');
    }

    //trae toda la tabla mascotas
    function getMascotas(){
        $sentencia = $this->db->prepare( "select * from mascotas ");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    //trae una mascota por id
    function getMascotaYsusDatos ($id){
        $sentencia = $this->db->prepare( "SELECT m.id, m.nombre, m.dni_cliente, m.fecha_de_alta, m.fecha_de_actualizacion FROM mascotas m WHERE m.id = ${id}");
        $sentencia->execute(array($id));
        $tareas = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tareas;
    }

}