<?php
/* Smarty version 3.1.39, created on 2021-10-06 23:57:53
  from 'C:\xampp\htdocs\web2\web2tpe-main\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e1be160c7b0_16724405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8152e6f1090708eaed1c0af9e6cfe12fbe6b043' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2tpe-main\\templates\\home.tpl',
      1 => 1633557465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e1be160c7b0_16724405 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/997b40c35d.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
