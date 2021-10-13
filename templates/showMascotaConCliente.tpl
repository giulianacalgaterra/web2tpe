{include file='templates/header.tpl'}

<body>

    <main>
        <div class="imagen-servicios">
        <div class="texto-importante">
        <table class="table-desktop">
        <h1>Listado de Clientes-Mascotas</h1>
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
                {foreach from=$clientesConMascotas item=$mascotaConCliente}
            <tr>
                
                <td colspan="2">{$mascotaConCliente->id}</td>
                <td colspan="2">{$mascotaConCliente->nombre_mascota}</td>
                <td colspan="2">{$mascotaConCliente->dni_cliente}</td>
                <td colspan="2">{$mascotaConCliente->fecha_de_alta}</td>
                <td colspan="2">{$mascotaConCliente->fecha_de_actualizacion}</td>
                <td colspan="2">{$mascotaConCliente->nombre_cliente}</td>
                <td colspan="2">{$mascotaConCliente->apellido}</td>
                <td colspan="2">{$mascotaConCliente->dni}</td>
                <td colspan="2">{$mascotaConCliente->fecha_de_alta}</td>
                <td colspan="2">{$mascotaConCliente->fecha_de_actualizacion}</td> 
                
            </tr>   
                {/foreach} 
            </tbody>
               
              
        </table> 
        </div>
        </div>
        
    </main>

{include file='templates/footer.tpl'}