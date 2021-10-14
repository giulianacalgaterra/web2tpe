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
                            <th colspan="2">Nombre</th>
                            <th colspan="2">Apellido</th>
                            <th colspan="2">DNI</th>
                            <th colspan="2">ID</th>
                            <th colspan="2">Nombre de la Mascota</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$todosLosClientes  item=$cliente}
                                <td colspan="2">{$cliente->nombre}</td>
                                <td colspan="2">{$cliente->apellido}</td>
                                <td colspan="2">{$cliente->dni}</td>
                                {foreach from=$todasLasMascotas  item=$mascota}
                                    <td colspan="2">{$mascota->id}</td>
                                    <td colspan="2">{$mascota->nombre}</td>
                                {/foreach}
                                </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </main>

{include file='templates/footer.tpl'}