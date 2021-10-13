{include file='templates/header.tpl'}


<div class="todos-datos-mascota">
<h1 class="mb-4">Mascota</h1>
    {foreach from=$mascotas item=$mascotas}
    <h2>Id: {$Mascotas->id}</h2>
    <h2>Nombre:{$Mascotas->nombre}</h2>
    <h2>dni_cliente: {$mascotas->dni_cliente}</h2>
    <h2>fecha de alta: {$mascotas->fecha_de_alta}</h2>
    <h2>fecha de actualizacion: {$mascotas->fecha_de_actualizacion}</h2>
    {/foreach} 
</div>

<div class="mascota-buscada">
<h1 class="mb-4">Mascota</h1>
    {foreach from=$showMascotaYsusDatos item=$showDatosYsusMascota}
    <h2>Id: {$showDatosYsusMascota->id}</h2>
    <h2>Nombre:{$showDatosYsusMascota->nombre}</h2>
    <h2>dni_cliente: {$showDatosYsusMascota->dni_cliente}</h2>
    <h2>fecha de alta: {$showDatosYsusMascota->fecha_de_alta}</h2>
    <h2>fecha de actualizacion: {$showDatosYsusMascota->fecha_de_actualizacion}</h2>
    {/foreach} 
</div>
<div>
    <input type="text" class="inputBuscar">
    <button class="btnBuscar">Buscar</button>
    <button class="btn-recargar"><i class="fas fa-sync-alt"></i></button>
    <a href="mascota-con-cliente" > Volver </a>
</div>


{include file='templates/footer.tpl'}