<?php
/* Smarty version 3.1.39, created on 2021-10-08 02:03:45
  from 'D:\xampp\htdocs\web2tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f8ae1e60051_52519970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abaf7548026557b429614626e14d4126945c5c93' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\home.tpl',
      1 => 1633649439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615f8ae1e60051_52519970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <main>
        <div class="imagen-servicios">
        <div class="texto-importante">
        <table class="table-desktop">
            <thead>
                <tr>
                    <h1>Listado de Clientes-Mascotas</h1>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td></td>
                    <td colspan="2">Clientes</td>
                    <td colspan="2">Mascotas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Dni</td>
                    <td>Fecha de alta</td>
                    <td>Fecha de actualizacion</td>
                    <td>Id</td>
                    <td>Nombre </td>
                    <td>Dni Cliente</td>
                    <td>Fecha de alta</td>
                    <td>Fecha de actualizacion</td>
                </tr>
                <tr>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                    <td></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->apellido;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->dni;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->fecha_de_alta;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->fecha_de_actualizacion;?>
</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
                <tr></tr>
                <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mascotas']->value, 'mascota');
$_smarty_tpl->tpl_vars['mascota']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mascota']->value) {
$_smarty_tpl->tpl_vars['mascota']->do_else = false;
?>
                     <td></td>
                     <td><?php echo $_smarty_tpl->tpl_vars['mascota']->value->id;?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['mascota']->value->nombre;?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['mascota']->value->dni_cliente;?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['mascota']->value->fecha_de_alta;?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['mascota']->value->fecha_de_actualizacion;?>
</td> 
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>

            </tbody>
        </table> 
        </div>
        </div>
        
    </main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
