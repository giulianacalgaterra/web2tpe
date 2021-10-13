<?php
/* Smarty version 3.1.39, created on 2021-10-13 19:54:02
  from 'D:\xampp\htdocs\web2tpe\templates\showMascotaYsusDatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61671d3ac94758_50010644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef48d7386d025ec7b28440ceb6e8d4e186f769ad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\showMascotaYsusDatos.tpl',
      1 => 1634147635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:mostrarporid.php' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61671d3ac94758_50010644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:mostrarporid.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="datos-mascota">
        
        <ul>
            
                <li><label for="id">ID:</label></li>
                <li><label for="nombre">Nombre:</label></li>
                <li><label for="dni-dueño">Dni Dueño:</label></li>
                <li><label for="fecha-de-alta">Fecha de alta:</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:</label></li>
                <li><label for="nombre-dueño">Nombre Dueño:</label></li>
                <li><label for="apellido-dueño">Apellido Dueño:</label></li>
                <li><label for="Dni">Dni dueño:</label></li> 
                <li><label for="fecha-de-alta">Fecha de alta:</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:</label></li> 
            
             
        </ul>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['showMascotaYsusDatos']->value, 'mascotaYsusDatos');
$_smarty_tpl->tpl_vars['mascotaYsusDatos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value) {
$_smarty_tpl->tpl_vars['mascotaYsusDatos']->do_else = false;
?>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->id;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->nombre_mascota;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->dni_cliente;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->fecha_de_alta;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->fecha_de_actualizacion;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->nombre_cliente;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->apellido;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->dni;?>
</label></li> 
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->fecha_de_alta;?>
</label></li>
            <li><label><?php echo $_smarty_tpl->tpl_vars['mascotaYsusDatos']->value->fecha_de_actualizacion;?>
</label></li> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
