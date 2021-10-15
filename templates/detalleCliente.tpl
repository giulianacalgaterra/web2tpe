{include file='templates/header.tpl'}


<div class="todos-datos-cliente">
        <table class="table-clientes">
        <h1>Listado de Clientes</h1>
            <thead>
                <tr>
                    <th colspan="2">Dni </th>
                    <th colspan="2">Nombre </th>
                    <th colspan="2">Apellido </th>
                    <th colspan="2">Fecha de alta</th>
                    <th colspan="2">Fecha de actualizacion</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$todosLosClientes item=$Cliente}
            <tr>
                <td colspan="2"><a href="cliente-y-sus-datos/{$Cliente->dni}">{$Cliente->dni}</a></td>
                <td colspan="2">{$Cliente->nombre}</td>
                <td colspan="2">{$Cliente->apellido}</td>
                <td colspan="2">{$Cliente->fecha_de_alta}</td>
                <td colspan="2">{$Cliente->fecha_de_actualizacion}</td> 
            </tr>   
                {/foreach} 
            </tbody>   
        </table> 
        </div>


{include file='templates/footer.tpl'}