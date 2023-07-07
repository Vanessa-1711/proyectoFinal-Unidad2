<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\postController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\empEmisorasController;
use App\Http\Controllers\empReceptorasController;
use App\Http\Controllers\regFacturaController;
use App\Http\Controllers\archivosController;
use App\Http\Controllers\portalController;
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
})->name("welcome");


//Ruta para login 
Route::get('/login', [loginController::class,'index'])->name("login");
//Ruta de validacion de login 
Route::post('/login', [loginController::class,'store']);

// Ruta para mostrar el dashboard del usuario autenticado
Route::get('/dashboard', [postController::class,'index'])->name("dashboard");

//Ruta de logout
Route::post('/logout', [logoutController::class,'store'])->name("logout");

//Ruta para la vista de empresas emisoras
Route::get('/empEmisoras', [empEmisorasController::class,'index'])->name("empEmisoras");
Route::get('/formEmisoras', [empEmisorasController::class,'create'])->name("formEmisoras");
Route::post('/formEmisoras', [empEmisorasController::class,'store']);

// Ruta para la vista de empresas receptoras
Route::get('/empReceptoras', [empReceptorasController::class, 'index'])->name("empReceptoras");
Route::get('/formReceptoras', [empReceptorasController::class, 'create'])->name("formReceptoras");
Route::post('/formReceptoras', [empReceptorasController::class, 'store']);

// Ruta para la vista de empresas facturas
Route::get('/regFactura', [regFacturaController::class,'index'])->name("regFactura");
Route::get('/formFactura', [regFacturaController::class, 'create'])->name("formFactura");
Route::post('/formFactura', [regFacturaController::class, 'store']);

//Ruta para cargar los archivos
Route::post('/pdf',[archivosController::class,'storePDF'])->name('archivospdf');
Route::post('/xml',[archivosController::class,'storeXML'])->name('archivosxml');

//Ruta para descargar los archivos de la tabla
Route::get('/download/{file}',[regFacturaController::class,'download'])->name('archivosDown');

//Ruta para eliminar la factura
Route::get('/eliminarFactura/{id_factura}',[regFacturaController::class, 'delete'])->name('eliminarFactura');

//ruta publica para el portal
Route::get('/Portal', [portalController::class,'index'])->name('portalIndex');

//ruta para buscar lo ingresado en el portal
Route::post('/Portal/busqueda', [portalController::class,'buscar'])->name('portalBuscar');;

//ruta para buscar lo ingresado en el portal
Route::get('/Portal/lista', [portalController::class, 'lista'])->name('portal.lista');

