<?php
/* Smarty version 3.1.39, created on 2021-10-12 19:47:12
  from 'D:\xampp\htdocs\web2tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165ca204144d6_89011818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abaf7548026557b429614626e14d4126945c5c93' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\home.tpl',
      1 => 1634060828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165ca204144d6_89011818 (Smarty_Internal_Template $_smarty_tpl) {
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
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mascotas']->value, 'mascota');
$_smarty_tpl->tpl_vars['mascota']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mascota']->value) {
$_smarty_tpl->tpl_vars['mascota']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascota']->value->id;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascota']->value->nombre;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascota']->value->dni_cliente;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascota']->value->fecha_de_alta;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['mascota']->value->fecha_de_actualizacion;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nombre;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->apellido;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->dni;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->fecha_de_alta;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->fecha_de_actualizacion;?>
</td> 
                
            </tr> 
              
            </tbody>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
        </table> 
        </div>
        </div>
        
    </main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
