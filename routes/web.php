<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendedorController;
use App\Models\Vendedor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Breeze rutas */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['Middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    //creamos la ruta y controlador para editar la informacion del perfil
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Vendedores
    Route::post('vendedor/buscar/', [VendedorController::class, 'buscar'])->name('vendedor.buscar');
    Route::get('vendedor', [VendedorController::class, 'index'])->name('vendedores.index');
    Route::get('vendedor/agregar', [VendedorController::class, 'create'])->name('vendedor.create');
    Route::get('vendedor/insertar', [VendedorController::class, 'store'])->name('vendedor.store');
    Route::get('vendedor/editar/{id}', [VendedorController::class, 'edit'])->name('vendedor.edit');
    Route::get('vendedor/actualizar/{id}', [VendedorController::class, 'actualizar'])->name('vendedor.actualizar');
    Route::get('vendedor/eleminar/{id}', [VendedorController::class, 'destroy'])->name('vendedor.destroy');
    Route::get('vendedor/detalles/{id}', [VendedorController::class, 'details'])->name('vendedor.details');
});
require __DIR__.'/auth.php';
