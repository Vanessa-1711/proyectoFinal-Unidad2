<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\postController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\empEmisorasController;
use App\Http\Controllers\empReceptorasController;
use App\Http\Controllers\regFacturaController;
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

// Ruta de validación de login 
Route::post('/formEmisoras', [empEmisorasController::class,'store']);

// Ruta para la vista de empresas receptoras
Route::get('/empReceptoras', [empReceptorasController::class, 'index'])->name("empReceptoras");
Route::get('/formReceptoras', [empReceptorasController::class, 'create'])->name("formReceptoras");
Route::post('/formReceptoras', [empReceptorasController::class, 'store']);

Route::get('/regFactura', [regFacturaController::class,'index'])->name("regFactura");
Route::get('/formFactura', [regFacturaController::class, 'create'])->name("formFactura");
