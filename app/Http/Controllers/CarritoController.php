<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cart;
use \App\User;

class CarritoController extends Controller
{
  public function index(){

      return view('cart.carrito');
  }
  public function agregarAlCarrito( Request $request){

    $user = User::find(1);

    $user->carrito()->attach($request->product_id,['quantity'=>1]);

    return redirect('/productos');
  }
}
