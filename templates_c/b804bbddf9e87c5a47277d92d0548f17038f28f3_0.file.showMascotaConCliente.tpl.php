<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:24:18
  from 'D:\xampp\htdocs\web2tpe\templates\showMascotaConCliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616740727c45b1_45219720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b804bbddf9e87c5a47277d92d0548f17038f28f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\showMascotaConCliente.tpl',
      1 => 1634156653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616740727c45b1_45219720 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <th colspan="2">Id</th>
                            <th colspan="2">Nombre </th>
                            <th colspan="2">Nombre</th>
                            <th colspan="2">Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientesConMascotas']->value, 'mascotaConCliente');
$_smarty_tpl->tpl_vars['mascotaConCliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mascotaConCliente']->value) {
$_smarty_tpl->tpl_vars['mascotaConCliente']->do_else = false;
?>
                            
                           <tr>
                                <td colspan="2"><a href="mascota-y-sus-datos/<?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->nombre_mascota;?>
</a></td>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->nombre_cliente;?>
</td>
                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->apellido;?>
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
