<?php
/* Smarty version 3.1.39, created on 2021-10-09 00:48:27
  from 'D:\xampp\htdocs\web2tpe\templates\mascota.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160cabb256d60_53182251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c3b23c2290384e709fa2e34862302fece8c2115' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\mascota.tpl',
      1 => 1633733301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6160cabb256d60_53182251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <h1 class="mb-4">Nombre:<?php echo $_smarty_tpl->tpl_vars['mascota']->value->nombre;?>
</h1>
    <h2>dni_cliente: <?php echo $_smarty_tpl->tpl_vars['mascota']->value->dni_cliente;?>
</h2>
    <h2>Id: <?php echo $_smarty_tpl->tpl_vars['clientes']->value->id;?>
</h2>
    <h2>fecha de alta: <?php echo $_smarty_tpl->tpl_vars['clientes']->value->fecha_de_alta;?>
</h2>
    <h2>fecha de actualizacion: <?php echo $_smarty_tpl->tpl_vars['clientes']->value->fecha_de_actualizacion;?>
</h2>

    <a href="home" > Volver </a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
