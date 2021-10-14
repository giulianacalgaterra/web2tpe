<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:41:56
  from 'D:\xampp\htdocs\web2tpe\templates\mascotaYsusDatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a42432bcf3_47482409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a4ca9b90e25cb94c290fb14406fdbadb7cfec5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\mascotaYsusDatos.tpl',
      1 => 1634246652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a42432bcf3_47482409 (Smarty_Internal_Template $_smarty_tpl) {
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
