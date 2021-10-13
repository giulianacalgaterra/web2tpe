{include file='templates/header.tpl'}

<div class="container">
    <h1 class="mb-4">Nombre:{$clientes->nombre}</h1>
    <h2>Apellido: {$clientes->apellido}</h2>
    <h2>Dni: {$clientes->dni}</h2>
    <h2>fecha de alta: {$clientes->fecha_de_alta}</h2>
    <h2>fecha de actualizacion: {$clientes->fecha_de_actualizacion}</h2>

    <a href= "mascota-con-cliente" > Volver </a>
</div>

{include file='templates/footer.tpl'}