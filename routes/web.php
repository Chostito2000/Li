<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\RegistroPersonawebcontroller;
use App\Http\Controllers\RegistroProductowebcontroller;
use Illuminate\Support\Facades\App;
use App\Http\Controllers;
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


Route::get('/mostrar-persona/{id_persona}',
[PersonaController::class, 'mostrarPersona']
)->name('mostrar.persona');

Route::get('/editar-persona/{id_persona}',
[PersonaController::class, 'editarPersona']
)->name('editar.persona');

Route::put('/actualizar-persona/{id_persona}',
[PersonaController::class, 'actualizarPersona']
)->name('actualizar.persona');
//------------------------------------------------------------------------------
//Pagina web
Route::get('/pagina-web',
[PaginaWebController::class, 'verPaginaWeb']
)->name('pagina.web');

Route::get('/pagina-web/registro-persona',
[RegistroPersonawebcontroller::class, 'registroPersona']
)->name('registro.persona');

Route::POST('/pagina-web/guardar-persona',
[RegistroPersonawebcontroller::class, 'guardarPersona']
)->name('guardar.persona');
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

Route::get('/editar-producto/{id_producto}',
[PersonaController::class, 'editarProducto']
)->name('editar.producto');

Route::put('/actualizar-producto/{id_producto}',
[PersonaController::class, 'actualizarProducto']
)->name('actualizar.producto');

//-------------------------------------------------------------------
 //-- Pdf personas y producto
Route::get('/pdf-personas', 
[PdfController::class,'exportarPdfPersonas']
)->name('pdf.personas');

Route::get('/pdf-productos', 
[PdfController::class,'exportarPdfProductos']
)->name('pdf.prpductos');

Route::get('/pdf-productos', [PdfController::class, 'exportarPdfProductos'])->name('pdf.productos');



Route::get('/editar-producto/{id}', [ProductoController::class, 'editarProducto'])->name('editar-producto');

