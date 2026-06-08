<?php

namespace App\Http\Controllers;

use App\Models\Category; // 🔥 IMPORTANTE: Con esto el controlador puede hablar con el modelo Category
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Muestra la lista de todas las categorías.
     */
    public function index()
    {
        // 1. Le pedimos al modelo que vaya a MySQL y traiga todas las categorías
        $categories = Category::all();

        // 2. Cargamos la vista 'categories.index' y le pasamos los datos que trajimos
        return view('categories.index', compact('categories'));
    }

    /**
     * Muestra el formulario para crear una nueva categoría.
     */
    public function create()
    {
        // Solo carga la pantalla donde estará el formulario
        return view('categories.create');
    }

    /**
     * Recibe los datos del formulario y los guarda en la base de datos.
     */
    public function store(Request $request)
    {
        // 1. Validamos que el usuario sí haya escrito el nombre y que no esté repetido
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'nullable',
        ]);

        // 2. El modelo toma los datos validados y los inserta en la base de datos
        Category::create($request->all());

        // 3. Redireccionamos al usuario a la lista principal con un mensaje de éxito
        return redirect()->route('categories.index')->with('success', '¡Categoría creada con éxito!');
    }

    /**
     * Los siguientes métodos (show, edit, update, destroy) los dejamos vacíos por ahora.
     * Los iremos rellenando a medida que avancemos en el ERP.
     */
    public function show(string $id) {
        $category = Category::findOrfail($id);

        return view('categories.show', compact('category'));
    }
    public function edit(string $id) {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, string $id) {
       $request->validate([
        'name' => 'required|max:255',
    ]);

    // Buscamos el registro real en MySQL
    $category = Category::findOrFail($id);

    // Actualizamos los datos con lo que viaja en el formulario
    $category->update($request->all());

    // Redirigimos al index con un mensaje de éxito
    return redirect()->route('categories.index')->with('success', 'Categoría actualizada correctamente.');
    }
    public function destroy($id)
{
    // Buscamos el registro en MySQL
    $category = Category::findOrFail($id);

    // Lo borramos de la existencia
    $category->delete();

    // Redirigimos al listado con un aviso de éxito
    return redirect()->route('categories.index')->with('success', 'Categoría eliminada con éxito.');
}
}