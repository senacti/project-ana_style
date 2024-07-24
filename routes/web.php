<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VentaController;

Route::get('/', function () {
    return view('auth.login');
});
//ruta de crud
Route::resource('inventario',InventarioController::class)->middleware('auth');
Route::resource('ventas', VentaController::class);
Auth::routes();

Route::get('/home',[InventarioController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [InventarioController::class, 'index'])->name('home');

});

Route::resource('posts', PostController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
