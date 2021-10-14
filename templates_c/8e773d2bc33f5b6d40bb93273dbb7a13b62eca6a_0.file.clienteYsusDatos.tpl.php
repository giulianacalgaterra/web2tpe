<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:41:51
  from 'D:\xampp\htdocs\web2tpe\templates\clienteYsusDatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a41f72e7c5_67406238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e773d2bc33f5b6d40bb93273dbb7a13b62eca6a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\clienteYsusDatos.tpl',
      1 => 1634246646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a41f72e7c5_67406238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="datos-cliente">
        
        <ul>
                <li><label for="dni-dueño">Dni Dueño:<?php echo $_smarty_tpl->tpl_vars['showClienteYsusDatos']->value->dni;?>
</label></li>
                <li><label for="nombre">Nombre:<?php echo $_smarty_tpl->tpl_vars['showClienteYsusDatos']->value->nombre;?>
</label></li>
                <li><label for="apellido">Apellido:<?php echo $_smarty_tpl->tpl_vars['showClienteYsusDatos']->value->apellido;?>
</label></li>
                <li><label for="fecha-de-alta">Fecha de alta:<?php echo $_smarty_tpl->tpl_vars['showClienteYsusDatos']->value->fecha_de_alta;?>
</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:<?php echo $_smarty_tpl->tpl_vars['showClienteYsusDatos']->value->fecha_de_actualizacion;?>
</label></li>    
        </ul>
</div>
<div>
    <a href="detalle-de-cliente" > Volver </a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
