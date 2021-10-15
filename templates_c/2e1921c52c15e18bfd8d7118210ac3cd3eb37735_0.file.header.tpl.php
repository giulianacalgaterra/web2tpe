<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:46:41
  from 'D:\xampp\htdocs\web2tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168cf7189b1f2_00012977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1921c52c15e18bfd8d7118210ac3cd3eb37735' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\header.tpl',
      1 => 1634258788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168cf7189b1f2_00012977 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a aria-current="page" href="detalle-de-cliente"> Detalle de Cliente </a></li>
                    <li><a href="detalle-de-mascota">Detalle de Mascota</a></li>
                    <li><a href="clientes-y-sus-mascotas">Clientes y sus Mascotas</a></li>
                    <li><a href="login">Ingresar</a></li>
                    <li><a href="logout">Cerrar sesion</a></li>
                </ul>
            </nav>
</header><?php }
}
