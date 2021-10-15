<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:49:04
  from 'D:\xampp\htdocs\web2tpe\templates\detalleMascotas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168d0007bc1f0_67626329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce773273e327e6b2fa439ce3d5bda9e1005921d4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\detalleMascotas.tpl',
      1 => 1634258941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168d0007bc1f0_67626329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="todos-datos-mascota">
        <table class="table-mascotas">
        <h1>Listado de Mascotas</h1>
            <thead>
                <tr>
                    <th></th>
                    <th colspan="2">Nombre </th>
                    <th colspan="2">Dni Cliente</th>
                    <th colspan="2">Fecha de alta</th>
                    <th colspan="2">Fecha de actualizacion</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todasLasMascotas']->value, 'Mascota');
$_smarty_tpl->tpl_vars['Mascota']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Mascota']->value) {
$_smarty_tpl->tpl_vars['Mascota']->do_else = false;
?>
            <tr>
                
            <td colspan="2"><a href="mascota-y-sus-datos/<?php echo $_smarty_tpl->tpl_vars['Mascota']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['Mascota']->value->nombre;?>
</a></td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Mascota']->value->dni_cliente;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Mascota']->value->fecha_de_alta;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Mascota']->value->fecha_de_actualizacion;?>
</td>
                
            </tr>   
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </tbody>   
        </table> 
        </div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
