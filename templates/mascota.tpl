{include file='templates/header.tpl'}

<div class="container">
    <h1 class="mb-4">Nombre:{$mascota->nombre}</h1>
    <h2>dni_cliente: {$mascota->dni_cliente}</h2>
    <h2>Id: {$mascotas->id}</h2>
    <h2>fecha de alta: {$mascotas->fecha_de_alta}</h2>
    <h2>fecha de actualizacion: {$mascotas->fecha_de_actualizacion}</h2>

    <a href="home" > Volver </a>
</div>

{include file='templates/footer.tpl'}