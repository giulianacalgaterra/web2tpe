{include file='templates/header.tpl'}

<div class="todos-datos-mascota">
        <table class="table-mascotas">
        <h1>Listado de Mascotas</h1>
            <thead>
                <tr>
                <th></th><th colspan="2">Id</th>
                <th colspan="2">Nombre </th>
                <th colspan="2">Dni Cliente</th>
                <th colspan="2">Fecha de alta</th>
                <th colspan="2">Fecha de actualizacion</th>
                <th colspan="2">Nombre</th>
                <th colspan="2">Apellido</th>
                <th colspan="2">Dni</th>
                <th colspan="2">Fecha de alta</th>
                <th colspan="2">Fecha de actualizacion</th>
                    
                </tr>
            </thead>
            <tbody>
                {foreach from=$todasLasMascotas item=$Mascota}
            <tr>
                
                <td colspan="2">{$Mascota->id}</td>
                <td colspan="2">{$Mascota->nombre}</td>
                <td colspan="2">{$Mascota->dni_cliente}</td>
                <td colspan="2">{$Mascota->fecha_de_alta}</td>
                <td colspan="2">{$Mascota->fecha_de_actualizacion}</td>
                
            </tr>   
                {/foreach} 
            </tbody>   
        </table> 
        </div>
{include file='templates/footer.tpl'}