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
    $request->validate([
        'nom' => 'required',
        'descripcio' => 'required',
        'preu' => 'required|numeric',
        'estoc' => 'required|numeric'
    ]);

    Producte::create($request->all());

    return redirect()->route('products.index')
                     ->with('success', 'Producto creado exitosamente.');
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $request->validate([
        'nom' => 'required',
        'descripcio' => 'required',
        'preu' => 'required|numeric',
        'estoc' => 'required|numeric'
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
}
