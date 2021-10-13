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
                    
                </tr>
            </thead>
            <tbody>
                {foreach from=$todasLasMascotas item=$Mascota}
            <tr>
                
            <td colspan="2"><a href="mascota-y-sus-datos/{$Mascota->id}">{$Mascota->nombre}</a></td>
                <td colspan="2">{$Mascota->dni_cliente}</td>
                <td colspan="2">{$Mascota->fecha_de_alta}</td>
                <td colspan="2">{$Mascota->fecha_de_actualizacion}</td>
                
            </tr>   
                {/foreach} 
            </tbody>   
        </table> 
        </div>

<div>
    <a href="mascota-con-cliente" > Volver </a>
</div>


{include file='templates/footer.tpl'}