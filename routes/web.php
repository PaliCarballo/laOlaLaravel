<?php

Route::get('/productos', 'ProductoController@index');
//para el admin
Route::get('/productos/agregar', 'ProductoController@createProduct')->middleware(['auth', 'admin']);
Route::post('/productos', 'ProductoController@save')->middleware('auth');
Route::get('/productos/editar/{id}', 'ProductoController@edit')->middleware(['auth', 'admin']);
Route::post('/productos/editar/{id}', 'ProductoController@update')->middleware('auth');
Route::get('/productos/{id}', 'ProductoController@oneProduct')->middleware('auth');

Route::get('/carrito', 'CarritoController@index');
Route::get('/carrito', 'CarritoController@miCarrito')->middleware('auth');

Route::post('/productos/agregarCarrito', 'CarritoController@agregarAlCarrito');


Route::get('/', 'PrincipalController@index');



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/preguntas', function(){
  return view('faqs');
});
