<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:23:59
  from 'D:\xampp\htdocs\web2tpe\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168adff29a565_76831574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1fe0e9a3764a38f4c1bfbad0f9671f1e5bdfa1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\Login.tpl',
      1 => 1634250232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168adff29a565_76831574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="formulario">
    <h2>Log In</h2>

    <form action="verify" method="POST" class="formulario-create-cliente">
                <input type="text" placeholder="email" name="email" id="email" required>
                <input type="password" placeholder="password" name="password" id="password" required>
                <input type="submit" class="btn-login" value="Login">
    </form>

    <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
