<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:24:03
  from 'D:\xampp\htdocs\web2tpe\templates\showClienteYsusDatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616778a3a450e5_97669566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '682f61a88aaa52dc0da6d90ed9a67f96faf5f263' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\showClienteYsusDatos.tpl',
      1 => 1634171011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616778a3a450e5_97669566 (Smarty_Internal_Template $_smarty_tpl) {
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
