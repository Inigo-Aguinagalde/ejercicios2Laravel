<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\validacion;
use Resources\views\layouts\master;

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

Route::get('/formulario', [validacion::class,'llamar'])->name('formulario');
Route::post('/validacion', [validacion::class,'validacion'])->name('validacion');
Route::post('/fimlValidation', [validacion::class,'filmValidator'])->name('fimlValidation');
Route::get('/prueba',function() {
    return View('layouts/master');
});

Route::get('/catalog/create',function(){
    return View('paginas/NuevaPelicula');
});

Route::get('/catalog',function(){
    return View('paginas/Catalogo');
});

