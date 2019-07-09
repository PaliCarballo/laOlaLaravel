<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class PrincipalController extends Controller
{
  public function index()
  {
      return view('index');

  }

public function productosDestacados(){


    //  public function buscar(){

        if(isset($_GET['name'])){
              $products = Product::where('name', 'LIKE', '%'.$_GET['name'].'%')->get();
            } else{
              $products = Product::all();
            }
              return view('index')->with( [ 'products' => $products] );


      }
}
