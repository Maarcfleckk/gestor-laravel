<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productes = Producte::all();
        return view('products', ['productes' => $productes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar el request
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'precio' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'imagen' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Validación de la imagen
        ]);

        // Guardar la imagen en el servidor
        //$imagenNombre = $request->file('imagen')->getClientOriginalName(); // Obtener el nombre de la imagen
         // Guardar la imagen en storage/app/public/images

        // Crear el producto en la base de datos junto con la ruta de la imagen
        Producte::create([
            'nom' => $validated['nombre'],
            'descripcio' => $validated['descripcion'],
            'preu' => $validated['precio'],
            'estoc' => $validated['stock'],
            'imagen' => $request->file('imagen')->store("Products")
        ]);

        return redirect('productes');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar el request
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'precio' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
        ]);

        // Obtener el producto a actualizar
        $producte = Producte::findOrFail($id);

        // Actualizar los campos del producto
        $producte->update([
            'nom' => $validated['nombre'],
            'descripcio' => $validated['descripcion'],
            'preu' => $validated['precio'],
            'estoc' => $validated['stock']
        ]);

        return redirect('productes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontrar y eliminar el producto
        Producte::findOrFail($id)->delete();

        return redirect('productes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontrar el producto por su ID
        $producte = Producte::findOrFail($id);

        return view('product-details', ['producte' => $producte]);
    }
    public function edit(string $id)
    {
        // Encontrar el producto por su ID
        $producte = Producte::findOrFail($id);

        return view('edit-product', ['producte' => $producte]);
    }

}
