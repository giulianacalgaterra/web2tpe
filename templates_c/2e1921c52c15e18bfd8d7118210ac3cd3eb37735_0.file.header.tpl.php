<?php
/* Smarty version 3.1.39, created on 2021-10-13 00:22:29
  from 'D:\xampp\htdocs\web2tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61660aa5812b33_03712945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1921c52c15e18bfd8d7118210ac3cd3eb37735' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\header.tpl',
      1 => 1634077344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61660aa5812b33_03712945 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a aria-current="page" href="mascota-con-cliente"> Mascotas con Clientes </a></li>
                    <li><a href="detalle-de-mascota">Detalle de Mascota</a></li>
                    <li><a href="listado-clientes">Listado de Clientes</a></li>
                    <li><a href="Mascota-X-Cliente">Mascota y su Cliente</a></li>
                    <li><a href="ingresar-nuevo">Ingresar nuevo</a></li>
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
