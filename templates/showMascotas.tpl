{include file='templates/header.tpl'}



<div class="todos-datos-mascota">
        <table class="table-mascotas">
        <h1>Listado de Mascotas</h1>
            <thead>
                <tr>
                    <th></th><th colspan="2">Id</th>
                    <th colspan="2">Nombre </th>  
                </tr>
            </thead>
            <tbody>
                {foreach from=$todasLasMascotas item=$Mascota}
            <tr>
                
                <td colspan="2">{$Mascota->id}</td>
                <td colspan="2">{$Mascota->nombre}</td>
                
            </tr>   
                {/foreach} 
            </tbody>   
        </table> 
        </div>

<div>
    <input placeholder="Id" type="text" class="inputBuscar">
    <button class="btnBuscar">Buscar</button>
    <button class="btn-recargar"><i class="fas fa-sync-alt"></i></button>
    <a href="mascota-con-cliente" > Volver </a>
</div>


{include file='templates/footer.tpl'}