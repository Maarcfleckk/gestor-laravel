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
        ]);
        Producte::create([
            'nom' => $validated['nombre'],
            'descripcio' => $validated['descripcion'],
            'preu' => $validated['precio'],
            'estoc' => $validated['stock']
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

        return view('show-product', ['producte' => $producte]);
    }

}
