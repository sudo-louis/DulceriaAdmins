<?php

use App\Http\Controllers\AdminsLoginController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
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

Route::get('/', function () {
    return view('welcome');
});

//INICIO DE SESIÓN CON TABLA ADMINS_LOGIN
Route::post('/inicio/login', [AdminsLoginController::class, 'login']);
Route::post('logout', [AdminsLoginController::class, 'logout'])->name('logout');

Route::middleware(['auth.custom'])->group(function () {
    Route::view('/pagina/index','/pagina/index');
    Route::view('/recursos/navbar','/recursos/navbar');
    Route::get('/categorias/index',[CategoriasController::class, 'index'])->name('categoria');
    Route::resource('categorias', CategoriasController::class);
    Route::get('/productos/index',[ProductosController::class, 'index'])->name('producto');
    Route::resource('productos', ProductosController::class);
});