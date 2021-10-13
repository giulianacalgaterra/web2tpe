{include file='templates/header.tpl'}


<div class="datos-cliente">
        
        <ul>
                <li><label for="nombre">Nombre:{$showClienteYsusDatos->nombre}</label></li>
                <li><label for="dni-dueño">Dni Dueño:{$showClienteYsusDatos->dni}</label></li>
                <li><label for="fecha-de-alta">Fecha de alta:{$showClienteYsusDatos->fecha_de_alta}</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:{$showClienteYsusDatos->fecha_de_actualizacion}</label></li>    
        </ul>
</div>
<div>
    <a href="detalle-de-cliente" > Volver </a>
</div>
{include file='templates/footer.tpl'}