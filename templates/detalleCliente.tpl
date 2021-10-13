{include file='templates/header.tpl'}


<div class="todos-datos-cliente">
        <table class="table-clientes">
        <h1>Listado de Clientes</h1>
            <thead>
                <tr>
                    <th colspan="2">Nombre </th>
                    <th colspan="2">Dni </th>
                    <th colspan="2">Fecha de alta</th>
                    <th colspan="2">Fecha de actualizacion</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$todosLosClientes item=$cliente}
            <tr>
                
            <td colspan="2"><a href="cliente-y-sus-datos/{$cliente->dni}">{$cliente->nombre}</a></td>
                <td colspan="2">{$cliente->dni}</td>
                <td colspan="2">{$cliente->fecha_de_alta}</td>
                <td colspan="2">{$cliente->fecha_de_actualizacion}</td>
            </tr>   
                {/foreach} 
            </tbody>   
        </table> 
        </div>

<div>
    <a href="mascota-con-cliente" > Volver </a>
</div>


{include file='templates/footer.tpl'}