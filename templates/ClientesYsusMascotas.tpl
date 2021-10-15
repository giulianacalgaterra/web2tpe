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
                            <th colspan="2">Nombre de la Mascota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {foreach from=$todosLosClientes  item=$cliente}
                                <td colspan="2">{$cliente->nombre}</td>
                                <td colspan="2">{$cliente->apellido}</td>
                                <td colspan="2">{$cliente->dni}</td>
                            <tr>
                                {foreach from=$todasLasMascotas  item=$mascota}
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td> 
                                    {{if $cliente->dni == $mascota->dni_cliente}}
                                        <td colspan="2">{$mascota->nombre}</td>
                                        <td colspan="2"><a><i class="fas fa-trash-alt"></i></a></td>
                                    {{/if}}
                                    
                                </tr>

                                {/foreach}
                            </tr>
                            
                            {/foreach}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

{include file='templates/footer.tpl'}