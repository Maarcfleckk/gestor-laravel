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
    public function update(Request $request, $id)
{
    // Validar el request
    $validated = $request->validate([
        'nombre' => ['required', 'string', 'max:255'],
        'descripcion' => ['required', 'string'],
        'precio' => ['required', 'numeric', 'min:0'],
        'stock' => ['required', 'integer', 'min:0'],
    ]);

    // Buscar el producto por ID
    $producte = Producte::find($id);

    // Verificar si el producto existe
    if (!$producte) {
        abort(404, 'Producto no encontrado');
    }

    // Actualizar los datos del producto
    $producte->update([
        'nom' => $validated['nombre'],
        'descripcio' => $validated['descripcion'],
        'preu' => $validated['precio'],
        'estoc' => $validated['stock']
    ]);

    return redirect('productes')->with('success', 'Producto actualizado correctamente');
}

    /**
     * Remove the specified resource from storage.
     */
    /**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $producte = Producte::find($id);

    // Verificar si el producto existe
    if (!$producte) {
        abort(404, 'Producto no encontrado');
    }

    $producte->delete();

    return redirect()->route('')
        ->with('success', 'Producto eliminado exitosamente.');
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $producte = Producte::find($id);

    // Verificar si el producto existe
    if (!$producte) {
        abort(404, 'Producto no encontrado');
    }

    return view('products-details', ['producte' => $producte]);
}

}
