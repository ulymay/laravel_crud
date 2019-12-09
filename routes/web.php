<?php

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

Route::resource('/productos', 'ProductosController');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/inicio', 'ProductosController@index');

// Route::get('/crear', 'ProductosController@create');

// Route::get('/actualizar', 'ProductosController@update');

// Route::get('/insertar', 'ProductosController@store');

// Route::get('/borrar', 'ProductosController@destroy');
