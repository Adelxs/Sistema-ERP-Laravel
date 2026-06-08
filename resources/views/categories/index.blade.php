<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP - Categorías</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="max-w-6xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Módulo de Categorías</h1>
            <a href="{{ route('categories.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-200">
                + Nueva Categoría
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 text-left">ID</th>
                        <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 text-left">Nombre</th>
                        <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 text-left">Descripción</th>
                        <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 text-left">Acciones</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @forelse($categories as $category)
                        <tr class="hover:bg-gray-50">
                            <td class="whitespace-nowrap px-4 py-3 font-bold text-gray-700">#{{ $category->id }}</td>
                            <td class="whitespace-nowrap px-4 py-3 text-gray-700 font-semibold">{{ $category->name }}</td>
                            <td class="px-4 py-3 text-gray-500">{{ $category->description ?? 'Sin descripción' }}</td>
                            <td class="whitespace-nowrap px-4 py-3 text-gray-700">
                                <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-600 hover:text-blue-900 font-semibold mr-3"> Editar </a>
                                 <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline" onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría? No hay marcha atrás.');">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">
                                    Eliminar
                                </button>
                            </form>
                            </td>
                           
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-8 text-center text-gray-500 bg-gray-50">
                                No hay categorías registradas en el ERP todavía. ¡Crea la primera!
                            </td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>