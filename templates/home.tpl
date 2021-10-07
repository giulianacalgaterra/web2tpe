{include file='templates/header.tpl'}

<body>

    <main>
        <div class="imagen-servicios">
        <div class="texto-importante">
            <h1>Mascotas</h1>
            <ul>
                {foreach from=$mascotas item=$mascota}
                    <li>
                        {$mascota->nombre}
                    </li>
                    <li>
                        {$mascota->dni_cliente}
                    </li>
                    <li>
                        {$mascota->fecha_de_alta}
                    </li>
                    <li>
                        {$mascota->fecha_de_actualizacion}
                    </li>

                {/foreach}

            </ul>
            <h1>clientes</h1>
            <ul>
                {foreach from=$clientes item=$cliente}
                    <li>
                        {$cliente->nombre}
                        {$cliente->apellido}
                    </li>
                    <li>
                        {$cliente->dni}
                    </li>
                    <li>
                        {$cliente->fecha_de_alta}
                    </li>
                    <li>
                        {$cliente->fecha_de_actualizacion}
                    </li>
                {/foreach}
            </ul>
        </div>
        </div>
        
    </main>

{include file='templates/footer.tpl'}