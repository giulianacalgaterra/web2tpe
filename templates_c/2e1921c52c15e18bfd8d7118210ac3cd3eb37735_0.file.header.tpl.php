<?php
/* Smarty version 3.1.39, created on 2021-10-07 03:07:28
  from 'D:\xampp\htdocs\web2tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e48507932f2_34513943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1921c52c15e18bfd8d7118210ac3cd3eb37735' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\header.tpl',
      1 => 1633568532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e48507932f2_34513943 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>veterinaria 2021</title>
</head>

<body>
    <div class="pagina">
        <header>
            <div class="logo-imagen"><img src="images/logo2original.jpg" alt="logo" height="85px"></div>
            <nav>
                <ul>
                    <li><a aria-current="page" href="home">Home</a></li>
                    <li><a href="clientes">Lista de clientes</a></li>
                    <li><a href="ingresar">Ingresar</a></li>
                    <li><a href="">Cerrar sesion</a></li>
                </ul>
            </nav>
            <div class="login">
                <input type="text" placeholder="Usuario">
                <input type="password" placeholder="Contraseña">
                <button type="submit" class="btn btn-login">Login</button>
            </div>
</header><?php }
}
