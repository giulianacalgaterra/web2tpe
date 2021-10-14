<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:18:27
  from 'D:\xampp\htdocs\web2tpe\templates\showClientesYsusMascotas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61686663eee726_45950855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e3a95478903ead00cdc7a3d9e95c2476dde973' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\showClientesYsusMascotas.tpl',
      1 => 1634226849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61686663eee726_45950855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <main>
        <div class="imagen-servicios">
            <div class="texto-importante">
                <table class="table-desktop">
                    <h1>Listado de Clientes-Mascotas</h1>
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="2">ID</th>
                            <th colspan="2">Nombre</th>
                            <th colspan="2">Apellido</th>
                            <th colspan="2">DNI</th>
                            <th colspan="2">Nombre de la Mascota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['showClienteYsusMascotas']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                           <tr>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nombre;?>
</td>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->apellido;?>
</td>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->dni;?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
