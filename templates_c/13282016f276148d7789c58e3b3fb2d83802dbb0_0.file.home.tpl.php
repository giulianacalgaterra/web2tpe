<?php
/* Smarty version 3.1.39, created on 2021-10-07 00:31:07
  from 'D:\xampp\htdocs\web2tpe-main\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e23ab8361a1_18927406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13282016f276148d7789c58e3b3fb2d83802dbb0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe-main\\templates\\home.tpl',
      1 => 1633559463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e23ab8361a1_18927406 (Smarty_Internal_Template $_smarty_tpl) {
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

<header>
<h1>Mascotas</h1>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mascotas']->value, 'mascota');
$_smarty_tpl->tpl_vars['mascota']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mascota']->value) {
$_smarty_tpl->tpl_vars['mascota']->do_else = false;
?>
<li>
<?php echo $_smarty_tpl->tpl_vars['mascota']->value->nombre;?>

</li>
<li>
<?php echo $_smarty_tpl->tpl_vars['mascota']->value->dni_cliente;?>

</li>
<li>
<?php echo $_smarty_tpl->tpl_vars['mascota']->value->fecha_de_alta;?>

</li>
<li>
<?php echo $_smarty_tpl->tpl_vars['mascota']->value->fecha_de_actualizacion;?>

</li>
        
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
<h1>clientes</h1>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
    <li>
    <?php echo $_smarty_tpl->tpl_vars['cliente']->value->nombre;?>

    <?php echo $_smarty_tpl->tpl_vars['cliente']->value->apellido;?>

    </li>
    <li>
    <?php echo $_smarty_tpl->tpl_vars['cliente']->value->dni;?>

    </li>
    <li>
    <?php echo $_smarty_tpl->tpl_vars['cliente']->value->fecha_de_alta;?>

    </li>
    <li>
    <?php echo $_smarty_tpl->tpl_vars['cliente']->value->fecha_de_actualizacion;?>

    </li>   
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</header>
<footer>
    <div class="footer-container">
        <h5>Todos Los Derechos Reservados © 2021</h5>
    </div>
</footer>
</div>
</body>

</html><?php }
}
