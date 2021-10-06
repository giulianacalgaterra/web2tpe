<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>veterinaria 2021</title>
</head>

<body>

<header>
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
</header>
<footer>
    <div class="footer-container">
        <h5>Todos Los Derechos Reservados © 2021</h5>
    </div>
</footer>
</div>
</body>

</html>