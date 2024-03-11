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
       $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'precio' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
        ]);

        $producte = Producte::find($id);
        $producte->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producte = Producte::find($id);
        $producte->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }

    public function show(string $id)
    {
        $producte = Producte::find($id);
        return view('products-details/$id', ['producte' => $producte]);
    }
}
