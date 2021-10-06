<?php
/* Smarty version 3.1.39, created on 2021-10-07 01:03:01
  from 'D:\xampp\htdocs\web2tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e2b2548fd88_97049090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abaf7548026557b429614626e14d4126945c5c93' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\home.tpl',
      1 => 1633561137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e2b2548fd88_97049090 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>

<main>
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
</main>
<?php }
}
