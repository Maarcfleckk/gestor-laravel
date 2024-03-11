<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Producte;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    $productes = Producte::all();
    return view('products', ['productes' => $productes]);
});

Route::resource('productes', ProductController::class);
Route::get('create', [ProductController::class, 'create']);
Route::post('store', [ProductController::class, 'store'])->name('store');
Route::get('productes/{id}', [ProductController::class, 'show']);
// ... Rutas existentes

Route::get('productes/{id}/edit', [ProductController::class, 'edit'])->name('productes.edit');
Route::put('productes/{id}', [ProductController::class, 'update'])->name('productes.update');
Route::delete('productes/{id}', [ProductController::class, 'destroy'])->name('productes.destroy');
