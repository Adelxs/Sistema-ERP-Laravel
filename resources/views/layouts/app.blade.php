<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
        }

        nav{
            background:#1f2937;
            padding:15px;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-right:20px;
        }

        .container{
            padding:20px;
        }
    </style>
</head>
<body>

<nav>
    
</nav>
<div class="container">
    @yield('content')
  <div class="grid grid-cols-2 gap-4 max-w-3xl mx-auto">
    <a href="/"><div class="bg-gray-200 p-4 h-32">Inicio</div></a>
    <a href="/products"><div class="bg-gray-200 p-4 h-32">Productos</div></a>
    <a href="/categories"><div class="bg-gray-200 p-4 h-32">Categorías</div></a>
    <a href="/users"><div class="bg-gray-200 p-4 h-32">Usuarios</div></a>
    <a href="/purchase"><div class="bg-gray-200 p-4 h-32">Compras</div></a>
    <a href="/sales"><div class="bg-gray-200 p-4 h-32">Ventas</div></a>
    <a href="/suppliers"><div class="bg-gray-200 p-4 h-32">Proveedores</div></a>
    <a href="/inventory"><div class="bg-gray-200 p-4 h-32">Inventario</div></a>

  </div>
</div>

</body>
</html>