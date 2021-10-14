<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo', 'Log in');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/Login.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL); //ver si esta bien
    }

    function showUserCreate($error=""){
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/registro.tpl');

    }
    function showCreateLogin($error=""){
        $this->smarty->assign('titulo','CREAR USUARIO');
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/registro.tpl');
    }

    function showHomeCreate(){
        header("Location: ".BASE_URL."createUser");
    }
    

    function showUser($users=null){
        $this->smarty->assign('users',$users);
        $this->smarty->display('templates/header.tpl');
    }
    
}