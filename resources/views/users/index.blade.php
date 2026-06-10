<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <nav class="bg-amber-800 h-16 flex items-center justify-left gap-6">
            <a href="/" class="text-white font-bold">Inicio</a>
            <a href="{{ route('users.create') }}" class="text-white font-bold">Crear usuario</a>
            <a href="{{ route('users.edit', 1) }}" class="text-white font-bold">Editar usuario</a>
        </nav>

        <div  class="max-w-3xl mx-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead>

                
                 <tr >
                   <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 text-left">
                    Nombre
                   </th>
                   <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 text-left">
                    Email
                   </th>
                 </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($users as $user)
                    <tr  class="hover:bg-gray-50">
                        <td class="whitespace-nowrap px-4 py-3 font-bold text-gray-700">{{ $user->name }}</td>
                        <td class="whitespace-nowrap px-4 py-3 font-bold text-gray-700">{{ $user->email }}</td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </header>
</body>
</html>