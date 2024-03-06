<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('productes');
});

Route::resource('productes', ProductController::class);
Route::get('create', [ProductController::class, 'create']);
Route::post('store', [ProductController::class, 'store'])->name('store');
Route::get('productes/{id}', [ProductController::class, 'show']);