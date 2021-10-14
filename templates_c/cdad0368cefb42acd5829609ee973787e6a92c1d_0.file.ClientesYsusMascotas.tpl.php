<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:15:23
  from 'D:\xampp\htdocs\web2tpe\templates\ClientesYsusMascotas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61688fdbe09049_34998772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdad0368cefb42acd5829609ee973787e6a92c1d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\ClientesYsusMascotas.tpl',
      1 => 1634242521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61688fdbe09049_34998772 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <th colspan="2">Nombre</th>
                            <th colspan="2">Apellido</th>
                            <th colspan="2">DNI</th>
                            <th colspan="2">Nombre de la Mascota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todosLosClientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nombre;?>
</td>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->apellido;?>
</td>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->dni;?>
</td>
                            <tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todasLasMascotas']->value, 'mascota');
$_smarty_tpl->tpl_vars['mascota']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mascota']->value) {
$_smarty_tpl->tpl_vars['mascota']->do_else = false;
?>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['cliente']->value->dni == $_smarty_tpl->tpl_vars['mascota']->value->dni_cliente) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascota']->value->nombre;?>
</td>
                                    <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                </tr>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>

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
