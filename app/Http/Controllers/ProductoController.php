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
        $products = Product::all();

        //return view('product.products')->with(['products'=>$products]);

        $vars = compact('products');
        return view('product.products', $vars);
    }

    public function save(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required',
            'avatar' => 'required|image',
        ],
        [
            'name.required' => 'El nombre es obligatorio',
            'description.required' => 'La descripción es obligatorio',
            'price.required' => 'El precio es obligatorio',
            'image' => 'Imagen invalida'
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
            'price' => $request->input('price')
        ]);

          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('avatar')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $product->avatar = $nombreArchivo;
        


        $product->save();
        return redirect('/productos');
    
        
    
    
    
    
    }

}
