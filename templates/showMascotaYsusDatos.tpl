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
                {foreach from=$todasLasMascotas item=$Mascotas}
            <tr>
                
                <td colspan="2">{$Mascotas->id}</td>
                <td colspan="2">{$Mascotas->nombre_mascota}</td>
                <td colspan="2">{$Mascotas->dni_cliente}</td>
                <td colspan="2">{$Mascotas->fecha_de_alta}</td>
                <td colspan="2">{$Mascotas->fecha_de_actualizacion}</td>
                
            </tr>   
                {/foreach} 
            </tbody>
               
              
        </table> 
        </div>

<div>
    <input type="text" class="inputBuscar">
    <button class="btnBuscar">Buscar</button>
    <button class="btn-recargar"><i class="fas fa-sync-alt"></i></button>
    <a href="mascota-con-cliente" > Volver </a>
</div>


{include file='templates/footer.tpl'}