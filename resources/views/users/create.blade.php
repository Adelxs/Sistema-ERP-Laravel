<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-2xl mx-auto mt-10">
        
        <div class="bg-white shadow-md rounded-lg p-6">

            <h1 class="text-3xl font-bold mb-6 text-gray-800">
                Crear Usuario
            </h1>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Nombre
                    </label>

                    <input
                        type="text"
                        placeholder="Ingrese el nombre"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        name="name"
                    >
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Correo Electrónico
                    </label>

                    <input
                        type="email"
                        placeholder="correo@empresa.com"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        name="email"
                    >
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        placeholder="********"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        name="password"
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-gray-700 font-semibold">
                        Rol
                    </label>

                    <select
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        <option>Administrador</option>
                        <option>Vendedor</option>
                        <option>Supervisor</option>
                        <option>Bodega</option>
                    </select>
                </div>

                <div class="flex gap-3">

                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg"
                    >
                        Guardar
                    </button>

                    <button
                        type="button"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-6 py-2 rounded-lg"
                    >
                        Cancelar
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>
</html>