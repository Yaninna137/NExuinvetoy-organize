<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Registro_servidorsController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[RegisterController::class, 'show'] );

Route::post('/register2' , [Registro_servidorsController::class,'store'])->name('servidors.store');


Route::post('/register',[RegisterController::class, 'register'] );

Route::get('/login',[LoginController::class, 'show'] )->name('login.show');

Route::post('/login',[LoginController::class, 'login'] );


Route::get('/home',[HomeController::class, 'index'] );


//PAGINAS-NEXUS-ADMINISTRADOR


Route::get('/ayuda', function () {
    return view('PAGINAS-NEXUS.ayuda');
});

Route::get('/calendario', function () {
    return view('PAGINAS-NEXUS.calendario');
});

Route::get('/categorias', [CategoriaController::class, 'index']);

Route::post('/categorias', [CategoriaController::class, 'store']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);


Route::get('/contactanos', function () {
    return view('PAGINAS-NEXUS.contactanos');
});
Route::post('/contactanos' , [ContactanosController::class,'store'])->name('contacto.store');


Route::get('/historial', function () {
    return view('PAGINAS-NEXUS.historial');
});

Route::get('/mas-sobre-nexus', function () {
    return view('PAGINAS-NEXUS.mas-sobre-nosotros');
});


Route::get('/productos', function () {
    return view('PAGINAS-NEXUS.productos');
});

Route::post('/productos', [ProductoController::class, 'store']);


Route::get('/proveedores', function () {
    return view('PAGINAS-NEXUS.proveedores');
});

Route::post('/proveedores', [ProveedorController::class, 'store']);

Route::get('/terminos', function () {
    return view('PAGINAS-NEXUS.terminos');
});


// Ruta para ver la página de trabajadores
Route::get('/trabajadores', function () {
    return view('PAGINAS-NEXUS.trabajadores');
});

// Ruta para eliminar un empleado y registrar datos
Route::delete('/trabajadores/{id}', [EmpleadosController::class, 'eliminar']);


Route::get('/ajustes', function () {
    return view('PAGINAS-NEXUS.ajustes');
});
