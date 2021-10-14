<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

    class LoginController{

        private $model;
        private $view;
    
        //construye las modelos el view
        function __construct(){
            $this->model = new UserModel();
            $this->view = new LoginView();
        }

        function login(){
            $this->view->showLogin();
        }

        function verifyLogin(){
            if(!empty($_POST['email']) && !empty($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                //obtengo el usuario de la base de datos
                $user = $this->model->getUser($email);
        
                //si el usuario exite y las contraseñas coinciden
               
                if ($user && password_verify($password, $user->password)) {

                    session_start();
                    $_SESSION["email"] = $email;

                    $this->view->showHome();
                } else {
                    $this->view->showLogin("acceso denegado");
                }
            }
        }

        function logout(){
            session_start();
            session_destroy();
            $this->view->showLogin("Te Deslogeaste, gracias por tu visita");
        }

        function createUser(){
            if(!empty($_POST['email'])&& !empty($_POST['password'])&&!empty($_POST['nombre_apellido'])){
                $userEmail=$_POST['email'];
                $userPassword=password_hash($_POST['password'],PASSWORD_BCRYPT) ;
                $userNombre=$_POST['nombre_apellido'];
               
            $this->model->insertUser($userEmail,$userPassword,$userNombre);
            $this->view->showLogin();
            }else{
                $this->view->showCreateLogin("El EMAIL ya existe");
            }
        }
        function createLogin(){
         $this->view->showCreateLogin();  
        }

    }