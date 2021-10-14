<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:20:47
  from 'D:\xampp\htdocs\web2tpe\templates\MascotaYsusDatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616866efd1af60_84847684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b8ec9076ed4dce8579671a32f2a17c6d773708' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\MascotaYsusDatos.tpl',
      1 => 1634232006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616866efd1af60_84847684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="datos-mascota">
        
        <ul>
                <li><label for="id">ID:<?php echo $_smarty_tpl->tpl_vars['showMascotaYsusDatos']->value->id;?>
</label></li>
                <li><label for="nombre">Nombre:<?php echo $_smarty_tpl->tpl_vars['showMascotaYsusDatos']->value->nombre;?>
</label></li>
                <li><label for="dni-dueño">Dni Dueño:<?php echo $_smarty_tpl->tpl_vars['showMascotaYsusDatos']->value->dni_cliente;?>
</label></li>
                <li><label for="fecha-de-alta">Fecha de alta:<?php echo $_smarty_tpl->tpl_vars['showMascotaYsusDatos']->value->fecha_de_alta;?>
</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:<?php echo $_smarty_tpl->tpl_vars['showMascotaYsusDatos']->value->fecha_de_actualizacion;?>
</label></li>    
        </ul>
</div>
<div>
    <a href="detalle-de-mascota" > Volver </a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
