<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acercade', function () {
    return view('acercade');
});


Route::resource('/productos', ProductoController::class);

Route::resource('/tipodocumentos', TipoDocumentoController::class);

Route::resource('/clientes', ClienteController::class);
