<?php
/* Smarty version 3.1.39, created on 2021-10-08 03:54:54
  from 'D:\xampp\htdocs\web2tpe\templates\createCliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615fa4ee5cf636_29750030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003727f9f234679c6b690006d058140aea3df4cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tpe\\templates\\createCliente.tpl',
      1 => 1633658025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615fa4ee5cf636_29750030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="formulario">

    <form action="" class="formulario-create-cliente">
        <ul>
            <li>
                <label for="nombre">Nombre:</label>
                <input id="nombreForm" type="text" name="nombre" value="">
            </li>
            <li>
                <label for="apellido">Apellido:</label>
                <input id="apellidoForm" type="text" name="apellido" value="">
            </li>
            <li>
                <label for="dni">DNI:</label>
                <input id="dniForm" type="text" name="dni" value="">
            </li>

            <li>
                <label for="nombre">Nombre de la mascota:</label>
                <input id="nombre-de-la-mascotaForm" type="text" name="nombre" value="">
            </li>
            <li>
                <label for="dni-cliente">DNI del Cliente</label>
                <input id="dni-clienteForm" type="text" name="dni-cliente" value="">
            </li>

            <li class="boton-sexo">
                <input type="radio" name="sexo" id="macho" value="macho">
                <label for="macho">Macho</label>
            </li>
            <li class="boton-sexo">
                <input type="radio" name="sexo" id="hembra" value="hembra">
                <label for="hembra">Hembra</label>
            </li>
            <li>
                <label for="comentario">Comentario:</label>
                <textarea name="comentario" rows="10" cols="20" placeholder="Ingrese comentario"></textarea>
            </li>

            <div class="userInput">
                <input type="text" placeholder="Typer the text here">
                <button class="btn" type="submit">Submit</button>
            </div>
        </ul>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
