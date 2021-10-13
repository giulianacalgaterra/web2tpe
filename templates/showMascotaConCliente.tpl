{include file='templates/header.tpl'}

<body>

    <main>
        <div class="imagen-servicios">
            <div class="texto-importante">
                <table class="table-desktop">
                    <h1>Listado de Clientes-Mascotas</h1>
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="2">Id</th>
                            <th colspan="2">Nombre </th>
                            <th colspan="2">Nombre</th>
                            <th colspan="2">Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$clientesConMascotas item=$mascotaConCliente}
                            
                           <tr>
                                <td colspan="2"><a href="mascota-y-sus-datos/{$mascotaConCliente->id}">{$mascotaConCliente->nombre_mascota}</a></td>
                                <td colspan="2">{$mascotaConCliente->nombre_cliente}</td>
                                <td colspan="2">{$mascotaConCliente->apellido}</td>
                            </tr>
                            
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </main>

{include file='templates/footer.tpl'}