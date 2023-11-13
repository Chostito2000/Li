<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroPersonawebcontroller;
use App\Http\Controllers\RegistroProductowebcontroller;

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

Route::get('/nueva-ruta', function () {
    return view('vistaDos');
});

//------------------------------------------------------------------------------
//Persona
Route::get('/lista-personas',
 [PersonaController::class, 'listarPersona']
)->name('lista-personas');

Route::delete('/eliminar-personas/{id_persona}',
 [PersonaController::class, 'eliminarPersona']
)->name('eliminar.persona');


Route::get('/lista-personas/{id_persona}',
[PersonaController::class, 'mostrarPersona']
)->name('mostrar-personas');

Route::POST('/pagina-web/guardar-persona',
[RegistroPersonawebcontroller::class, 'guardarPersona']
)->name('guardar.persona');
//------------------------------------------------------------------------------
//Pagina web
Route::get('/pagina-web',
[PaginaWebController::class, 'verPaginaWeb']
)->name('pagina.web');

Route::get('/pagina-web/registro-persona',
[RegistroPersonawebcontroller::class, 'registroPersona']
)->name('registro.persona');


//--------------------------------------------------------------------------------
// productos

Route::POST('/pagina-web/guardar-producto',
[RegistroProductowebcontroller::class, 'guardarProducto']
)->name('guardar.producto');

Route::get('/lista-productos/{id_producto}',
[ProductoController::class, 'mostrarProducto']
)->name('mostrar-productos');

Route::get('/lista-productos',
 [ProductoController::class, 'listarProducto']
)->name('lista-productos');

Route::delete('/eliminar-productos/{id_producto}', 
[ProductoController::class, 'eliminarProducto'])
->name('eliminar.productos');

Route::get('/pagina-web/registro-producto',
[RegistroProductowebcontroller::class, 'registroProducto']
)->name('registro.producto');