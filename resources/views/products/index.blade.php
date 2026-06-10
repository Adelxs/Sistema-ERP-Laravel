<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-5xl text-red-500 font-bold">
    Pagina productos
</h1>
    <div class="max-w-6xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
      
        <form action="{{ route('products.store') }}" method="POST">
             @csrf
            <input type="text" class="border border-gray-400 rounded px-3 py-2 w-full" name="name"/>
             <button
                type="submit"
                class="mt-4 bg-blue-500 text-white px-4 py-2 rounded"
            >
                Guardar
            </button>
        </form>
    </div>
</body>
</html>