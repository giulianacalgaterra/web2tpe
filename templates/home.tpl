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
            <tr>
                {foreach from=$mascotas item=$mascota}
                {foreach from=$clientes item=$cliente}
                <td colspan="2">{$mascota->id}</td>
                <td colspan="2">{$mascota->nombre}</td>
                <td colspan="2">{$mascota->dni_cliente}</td>
                <td colspan="2">{$mascota->fecha_de_alta}</td>
                <td colspan="2">{$mascota->fecha_de_actualizacion}</td>
                <td colspan="2">{$cliente->nombre}</td>
                <td colspan="2">{$cliente->apellido}</td>
                <td colspan="2">{$cliente->dni}</td>
                <td colspan="2">{$cliente->fecha_de_alta}</td>
                <td colspan="2">{$cliente->fecha_de_actualizacion}</td> 
                
            </tr> 
              
            </tbody>
               {/foreach}
               {/foreach}
              
        </table> 
        </div>
        </div>
        
    </main>

{include file='templates/footer.tpl'}