{include file='templates/header.tpl'}
{include_php file='./VeterinariaController/mostrarporid.php' }

<div class="datos-mascota">
        
        <ul>
            
                <li><label for="id">ID:</label></li>
                <li><label for="nombre">Nombre:</label></li>
                <li><label for="dni-dueño">Dni Dueño:</label></li>
                <li><label for="fecha-de-alta">Fecha de alta:</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:</label></li>
                <li><label for="nombre-dueño">Nombre Dueño:</label></li>
                <li><label for="apellido-dueño">Apellido Dueño:</label></li>
                <li><label for="Dni">Dni dueño:</label></li> 
                <li><label for="fecha-de-alta">Fecha de alta:</label></li>
                <li><label for="fecha-de-actualizacion">Fecha de actualizacion:</label></li> 
            
             
        </ul>
        <ul>
            {foreach from=$showMascotaYsusDatos item=$mascotaYsusDatos}
            <li><label>{$mascotaYsusDatos->id}</label></li>
            <li><label>{$mascotaYsusDatos->nombre_mascota}</label></li>
            <li><label>{$mascotaYsusDatos->dni_cliente}</label></li>
            <li><label>{$mascotaYsusDatos->fecha_de_alta}</label></li>
            <li><label>{$mascotaYsusDatos->fecha_de_actualizacion}</label></li>
            <li><label>{$mascotaYsusDatos->nombre_cliente}</label></li>
            <li><label>{$mascotaYsusDatos->apellido}</label></li>
            <li><label>{$mascotaYsusDatos->dni}</label></li> 
            <li><label>{$mascotaYsusDatos->fecha_de_alta}</label></li>
            <li><label>{$mascotaYsusDatos->fecha_de_actualizacion}</label></li> 
            {/foreach}
        </ul>
    
</div>
{include file='templates/footer.tpl'}