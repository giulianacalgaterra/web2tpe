<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:29:37
  from 'D:\xampp\htdocs\web2tpe\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168af514a9fb9_26043775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7c14e79685a167b079effa9e6de787a5388d342' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\registro.tpl',
      1 => 1634250455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168af514a9fb9_26043775 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylecss.css">

    <title>Registro</title>
</head>

<body>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            <form class="form-alta" action="createUser" method="POST">
                <input placeholder="email" type="text" name="email" id="email" required>
                <input placeholder="Nombre y Apellido" type="text" name="nombre_apellido" required>
                <input placeholder="password" type="password" name="password" id="password" required>
                <input type="submit" class="btn btn-primary" value="Create Cuenta">
            </form>
        </div>
    </div>
    <h4 class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>

</div>
</body>

</html><?php }
}
