<?php
Route::get('/productos', 'ProductoController@index');
//para el admin
Route::get('/productos/agregar', 'ProductoController@createProduct')->middleware(['auth', 'admin']);
Route::post('/productos', 'ProductoController@save')->middleware(['auth', 'admin']);

Route::get('/productos/editar/{id}', 'ProductoController@edit')->middleware(['auth', 'admin']);
Route::post('/productos/editar/{id}', 'ProductoController@update')->middleware(['auth', 'admin']);

Route::get('/productos/delete/{id}', 'ProductoController@borrarProducto')->middleware(['auth', 'admin']);
Route::post('/productos/delete/{id}', 'ProductoController@borrar')->middleware(['auth', 'admin']);

Route::get('/carrito', 'CarritoController@index')->middleware('auth');
Route::get('/carrito', 'CarritoController@miCarrito')->middleware('auth');
//Route::get('/carrito', 'CarritoController@sumarProductos')->middleware('auth');

Route::post('/productos/agregarCarrito', 'CarritoController@agregarAlCarrito');

Route::post('/carrito/sacarCarrito', 'CarritoController@sacarDelCarrito');

Route::get('/', 'PrincipalController@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/preguntas', function(){
  return view('faqs');
});

Route::get('/login/facebook', 'Auth\LoginController@redirectToProviderFB');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFB');
