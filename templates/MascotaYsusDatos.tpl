{include file='templates/header.tpl'}


<div class="datos-mascota">
        
        <ul>
                <li><label for="id">ID:{$showMascotaYsusDatos->id}</label></li>
                <li><label for="nombre">Nombre:{$showMascotaYsusDatos->nombre}</label></li>
                <li><label for="dni-dueño">Dni Dueño:{$showMascotaYsusDatos->dni_cliente}</label></li>
                <li><label for="fecha-de-alta">Fecha de alta:{$showMascotaYsusDatos->fecha_de_alta}</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:{$showMascotaYsusDatos->fecha_de_actualizacion}</label></li>    
        </ul>
</div>
<div>
    <a href="detalle-de-mascota" > Volver </a>
</div>
{include file='templates/footer.tpl'}