<?php

    class UserModel{

        private $db;
        function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=veterinaria;charset=utf8', 'root', 'giuliana1492');
    }

        function getUser($email){
            $query = $this->db->prepare('SELECT * FROM user WHERE email = ?');
            $query->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);

        }

        function getUsers(){
            $query = $this->db->prepare('SELECT * FROM user');
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function insertUser($userEmail,$userPassword,$userNombre){
            $query = $this->db->prepare('INSERT INTO user (email, password,nombre_apellido) VALUES (?,?,?)');
            $query->execute([$userEmail,$userPassword,$userNombre]);
            
        }
    }