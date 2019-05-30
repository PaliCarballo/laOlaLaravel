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

Route::get('/', 'HomeController@index');

Route::get('/preguntas', 'HomeController@faqs');

Route::get('/productos', 'ProductoController@index');
Route::get('/productos/agregar', 'ProductoController@createProduct');
Route::post('/AgregarProducto', 'ProductoController@save');


Route::get('/registro', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

