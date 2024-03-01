<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;


class ProductesController extends Controller
{
    public function mostrarLlista()
    {
        $productes = Producte::all();
        return view('products', ['productes' => $productes]);
    }

    public function afegirProducte(Request $request)
    {
        // Lógica para agregar un nuevo producto a la base de datos
        // Puedes usar el método create() u otro método según tus necesidades.

        return redirect()->route('products.index')->with('success', 'Producte afegit amb èxit!');
    }

    public function veureDetalls($id)
    {
        $producte = Producte::find($id);
        return view('product-details', ['producte' => $producte]);
    }
}
