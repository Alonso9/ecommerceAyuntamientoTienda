<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Tienda;
use App\Http\Controllers\TiendaController;
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
    Route::post('vendedor/insertar', [VendedorController::class, 'store'])->name('vendedor.store');
    Route::get('vendedor/editar/{id}', [VendedorController::class, 'edit'])->name('vendedor.edit');
    Route::get('vendedor/actualizar/{id}', [VendedorController::class, 'actualizar'])->name('vendedor.actualizar');
    Route::get('vendedor/eleminar/{id}', [VendedorController::class, 'destroy'])->name('vendedor.destroy');
    Route::get('vendedor/detalles/{id}', [VendedorController::class, 'details'])->name('vendedor.details');

    //Productos
    Route::get('productos/index/{id}', [ProductoController::class, 'index'])->name('producto.index');
    Route::post('productos/buscar/', [ProductoController::class, 'buscar'])->name('producto.buscar');
    Route::get('productos/agregar/{id}', [ProductoController::class, 'create'])->name('producto.create');
    Route::post('Productos/insertar', [ProductoController::class, 'store'])->name('producto.store');
    Route::get('productos/editar/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
    Route::get('productos/actualizar/{id}', [ProductoController::class, 'actualizar'])->name('producto.actualizar');
    Route::get('producto/eleminar/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');
    Route::get('productos/detalles/{id}', [ProductoController::class, 'details'])->name('producto.details');

    //Tienda
    Route::get('TIenda', [TiendaController::class, 'index'])->name('StoreViews.index');
    Route::get('TIenda/AboutUs', [TiendaController::class, 'aboutUS'])->name('StoreViews.aboutUs');
    Route::get('TIenda/Productores', [TiendaController::class, 'productores'])->name('StoreViews.productores');
    Route::get('TIenda/Productores/producto/{id}', [TiendaController::class, 'viewProducto'])->name('StoreViews.producto');
    Route::get('TIenda/Productores/contacto/{id}', [TiendaController::class, 'contacto'])->name('StoreViews.contacto');

});
require __DIR__.'/auth.php';
