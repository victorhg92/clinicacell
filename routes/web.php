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

Route::get('/', function () {
    return view('index');
})->name('inicio');
Route::get('productos', function(){
	return view('productos');
})->name('productos');
Route::get('reparaciones', function(){
	return view('reparaciones');
})->name('reparaciones');
Route::get('contacto', function(){
	return view('contacto');
})->name('contacto');