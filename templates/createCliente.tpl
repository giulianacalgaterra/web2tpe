{include file='templates/header.tpl'}
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
{include file='templates/footer.tpl'}