<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:09:46
  from 'D:\xampp\htdocs\web2tpe\templates\detalleCliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c6ca4355d9_25049710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac62b88f561d8b81f532591114e9825479d0217' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\detalleCliente.tpl',
      1 => 1634254970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168c6ca4355d9_25049710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="todos-datos-cliente">
        <table class="table-clientes">
        <h1>Listado de Clientes</h1>
            <thead>
                <tr>
                    <th colspan="2">Dni </th>
                    <th colspan="2">Nombre </th>
                    <th colspan="2">Apellido </th>
                    <th colspan="2">Fecha de alta</th>
                    <th colspan="2">Fecha de actualizacion</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todosLosClientes']->value, 'Cliente');
$_smarty_tpl->tpl_vars['Cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Cliente']->value) {
$_smarty_tpl->tpl_vars['Cliente']->do_else = false;
?>
            <tr>
                <td colspan="2"><a href="cliente-y-sus-datos/<?php echo $_smarty_tpl->tpl_vars['Cliente']->value->dni;?>
"><?php echo $_smarty_tpl->tpl_vars['Cliente']->value->dni;?>
</a></td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Cliente']->value->nombre;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Cliente']->value->apellido;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Cliente']->value->fecha_de_alta;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Cliente']->value->fecha_de_actualizacion;?>
<i class="fas fa-trash-alt"></i></td> 
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
