<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductoController extends Controller
{
    public function oneProduct($id){

      //  $genres = Genre::where('id', '=', $id)->first();

        $products = Product::find($id);
        // Hace un where, solo para llave primaria
        dd($products);

    }
    public function createProduct() {
        return view('product.create');
    }

    public function index(){
        $products = Product::paginate(2);
        $cantidad = ceil($products->count() / 2);
        //return view('product.products')->with(['products'=>$products]);

        $vars = compact('products');
        return view('product.products', $vars);
    }

    public function edit($id) {
      $productoEditado = Product::find($id);
        return view('product.edit')
          ->with([
            'producto' => $productoEditado
          ]);
    }
    public function update($id, Request $request)
    {

      $this->validate($request, [
        'name' => 'required|unique:products',
        'description' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'avatar' => 'required|image',
    ],
    [
        'name.required' => 'El nombre es obligatorio',
        'description.required' => 'La descripción es obligatorio',
        'price.required' => 'El precio es obligatorio',
        'quantity.required' => 'Ingrese cantidad deseada',
        'image' => 'avatarImagen invalida',
    ]);

        //me traigo a la pelicula usando el find
        $productoAEditar = Product::find($id);
        //le cambio los atributos o valores al objeto que me traje arriba
        $productoAEditar->name = $request->name;
        $productoAEditar->description = $request->description;
        $productoAEditar->price = $request->price;
        $productoAEditar->quantity = $request->quantity;

        //si subo un archivo lo guardo
        if($request->file('avatar')){
          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $productoAEditar->avatar = $nombreArchivo;
        }



        if($request->file('avatar1')){
          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar1')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $productoAEditar->avatar1 = $nombreArchivo;
        }
        if($request->file('avatar2')){
          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar2')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $productoAEditar->avatar2 = $nombreArchivo;
        }
        if($request->file('avatar3')){
          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar3')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $productoAEditar->avatar3 = $nombreArchivo;
        }

        if($request->file('avatar4')){
          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar4')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $productoAEditar->avatar4 = $nombreArchivo;
        }
        //lo mando a guardar
        $productoAEditar->save();
        return redirect('/productos');
    }



    public function save(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'avatar' => 'required|image',
            'avatar1' => 'required|image',
            'avatar2' => 'required|image',
            'avatar3' => 'required|image',
            'avatar4' => 'required|image',
        ],
        [
            'name.required' => 'El nombre es obligatorio',
            'description.required' => 'La descripción es obligatorio',
            'price.required' => 'El precio es obligatorio',
            'quantity.required' => 'Ingrese cantidad deseada',
            'image' => 'Imagen invalida',
        ]);

        //si las validaciones estan bien procedo a guardar
        //PRIMERA FORMA
        // Product::create(
        //     [
        //         'name' => $request->input('name'),
        //         'description' => $request->input('description'),
        //         'price' => $request->input('price')
        //     ]
        // );

        //SEGUNDA FORMA
        //$product = new Product();
        //$product->name = $request->input('name');
        //$product->save();

        //TERCERA FORMA
        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
        ]);


                  //al archivo que subi lo voy a guardar en el filesystem de laravel
                  $rutaDelArchivo = $request->file('avatar')->store('public');
                  //le saco solo el nombre
                  $nombreArchivo = basename($rutaDelArchivo);
                  //guardo el nombre del archivo en el campo poster
                  $product->avatar = $nombreArchivo;

          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar1')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $product->avatar1 = $nombreArchivo;

          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar2')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $product->avatar2 = $nombreArchivo;

          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar3')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $product->avatar3 = $nombreArchivo;

          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar4')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $product->avatar4 = $nombreArchivo;




        $product->save();
        return redirect('/productos');






    }

}
