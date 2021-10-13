<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:46:41
  from 'D:\xampp\htdocs\web2tpe\templates\showMascotaConCliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61662c712522e1_25206749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b804bbddf9e87c5a47277d92d0548f17038f28f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\showMascotaConCliente.tpl',
      1 => 1634085954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61662c712522e1_25206749 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <th></th><th colspan="2">Id</th>
                    <th colspan="2">Nombre </th>
                    <th colspan="2">Dni Cliente</th>
                    <th colspan="2">Fecha de alta</th>
                    <th colspan="2">Fecha de actualizacion</th>
                    <th colspan="2">Nombre</th>
                    <th colspan="2">Apellido</th>
                    <th colspan="2">Dni</th>
                    <th colspan="2">Fecha de alta</th>
                    <th colspan="2">Fecha de actualizacion</th>
                    
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
                
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->id;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->nombre_mascota;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->dni_cliente;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->fecha_de_alta;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->fecha_de_actualizacion;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->nombre_cliente;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->apellido;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->dni;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->fecha_de_alta;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascotaConCliente']->value->fecha_de_actualizacion;?>
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
