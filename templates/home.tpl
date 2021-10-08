{include file='templates/header.tpl'}

<body>

    <main>
        <div class="imagen-servicios">
        <div class="texto-importante">
        <table class="table-desktop">
            <thead>
                <tr>
                    <h1>Listado de Clientes-Mascotas</h1>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td></td>
                    <td colspan="2">Clientes</td>
                    <td colspan="2">Mascotas</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Dni</td>
                    <td>Fecha de alta</td>
                    <td>Fecha de actualizacion</td>
                    <td>Id</td>
                    <td>Nombre </td>
                    <td>Dni Cliente</td>
                    <td>Fecha de alta</td>
                    <td>Fecha de actualizacion</td>
                </tr>
                <tr>
                     {foreach from=$clientes item=$cliente}
                    <td></td>
                    <td>{$cliente->nombre}</td>
                    <td>{$cliente->apellido}</td>
                    <td>{$cliente->dni}</td>
                    <td>{$cliente->fecha_de_alta}</td>
                    <td>{$cliente->fecha_de_actualizacion}</td>
                    {/foreach}
                </tr>
                <tr></tr>
                <tr>
                {foreach from=$mascotas item=$mascota}
                     <td></td>
                     <td>{$mascota->id}</td>
                     <td>{$mascota->nombre}</td>
                     <td>{$mascota->dni_cliente}</td>
                     <td>{$mascota->fecha_de_alta}</td>
                     <td>{$mascota->fecha_de_actualizacion}</td> 
                    {/foreach}
                </tr>

            </tbody>
        </table> 
        </div>
        </div>
        
    </main>

{include file='templates/footer.tpl'}