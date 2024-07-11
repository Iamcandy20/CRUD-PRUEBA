<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/productos', 301);
Route::redirect('/home', '/productos', 301);

Auth::routes();
// Route::resource('categorias', CategoriaController::class);

Route::get('categorias/create', [CategoriaController::class, 'create'] )->name("categorias.create");
Route::post('categorias/store', [CategoriaController::class, 'store'] )->name("categorias.store");
Route::get('categorias/{categoria}/edit', [CategoriaController::class, 'edit'] )->name("categorias.edit");
Route::get('categorias/{categoria}', [CategoriaController::class, 'update'] )->name("categorias.update");
Route::get('categorias', [CategoriaController::class, 'index'] )->name("categorias.index");
Route::get('categorias/destroy/{categoria}', [CategoriaController::class, 'destroy'] )->name("categorias.destroy");


Route::get('productos/create', [ProductosController::class, 'create'] )->name("productos.create");
Route::post('productos/store', [ProductosController::class, 'store'] )->name("productos.store");
Route::get('productos/{producto}/edit', [ProductosController::class, 'edit'] )->name("productos.edit");
Route::get('productos/{producto}', [ProductosController::class, 'update'] )->name("productos.update");
Route::get('productos', [ProductosController::class, 'index'] )->name("productos.index");
Route::get('productos/destroy/{producto}', [ProductosController::class, 'destroy'] )->name("productos.destroy");