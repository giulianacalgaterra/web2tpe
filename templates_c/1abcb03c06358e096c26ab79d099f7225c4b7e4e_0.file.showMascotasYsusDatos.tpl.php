<?php
/* Smarty version 3.1.39, created on 2021-10-13 15:58:58
  from 'D:\xampp\htdocs\web2tpe\templates\showMascotasYsusDatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166e622e58461_89801415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1abcb03c06358e096c26ab79d099f7225c4b7e4e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\showMascotasYsusDatos.tpl',
      1 => 1634133532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6166e622e58461_89801415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="todos-datos-mascota">
        <table class="table-mascotas">
        <h1>Listado de Mascotas</h1>
            <thead>
                <tr>
                    <th></th><th colspan="2">Id</th>
                    <th colspan="2">Nombre </th>   
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
                
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Mascota']->value->id;?>
</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['Mascota']->value->nombre;?>
</td>  
            </tr>   
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </tbody>   
        </table> 
        </div>

<div>
    <input placeholder="Id" type="text" class="inputBuscar">
    <button class="btnBuscar">Buscar</button>
    <button class="btn-recargar"><i class="fas fa-sync-alt"></i></button>
    <a href="mascota-con-cliente" > Volver </a>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
