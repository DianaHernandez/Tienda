<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Categorias/crear', function () {
    return view('Categorias.CrearCategorias');
});

Route::get('Categorias', function () {
    return view('Categorias.indexCategorias');
});

Route::get('Categorias/Actualizar', function () {
    return view('Categorias.ActualizarCategoria');
});

Route::get('DYR', function () {
    return view('calzado.index');
});
