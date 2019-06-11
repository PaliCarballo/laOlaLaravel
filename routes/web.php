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
Route::get('/index', 'HomeController@index');



Route::get('/productos', 'ProductoController@index');
//para el admin
Route::get('/productos/agregar', 'ProductoController@createProduct');
Route::post('/productos', 'ProductoController@save');
Route::post('/productos/editar/{id}', 'ProductoController@update');
Route::get('/productos/editar/{id}', 'ProductoController@edit');

Route::get('/productos/{id}', 'ProductoController@oneProduct');

Route::get('/carrito', 'CarritoController@index');

Route::post('/productos/agregarCarrito', 'CarritoController@agregarAlCarrito');

Route::get('/registro', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/preguntas', function(){
  return view('faqs');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
