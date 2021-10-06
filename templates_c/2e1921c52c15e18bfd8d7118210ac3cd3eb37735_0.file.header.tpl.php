<?php
/* Smarty version 3.1.39, created on 2021-10-07 01:06:26
  from 'D:\xampp\htdocs\web2tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e2bf2a4dc36_52730526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1921c52c15e18bfd8d7118210ac3cd3eb37735' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\header.tpl',
      1 => 1633561372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e2bf2a4dc36_52730526 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>veterinaria 2021</title>
</head>

<body>
<div class="pagina">
    <nav class="nav-list" id="nav-menu">
        <div class="top-nav-column">
            <span>ACA VA EL LOGO</span>
        </div>
        <div class="list-nav-column">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes">Lista de clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ingresar">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Cerrar sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="title">
            <h1>Titulo</h1>
        </div>
        <div class="login">
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Contraseña">
            <button type="submit" class="btn btn-login">Login</button>
        </div>
    </header><?php }
}
