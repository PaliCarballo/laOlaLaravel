<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cart;
use \App\User;
use Illuminate\Support\Facades\Auth;
class CarritoController extends Controller
{
  public function index(){

      return view('cart.carrito');
  }
  public function agregarAlCarrito( Request $request){

    $user =Auth::user();

    $user->carrito()->attach($request->product_id,['quantity'=>1]);

    return redirect('/carrito');
  }

  public function miCarrito(){
    $user =Auth::user();

    $datalles=$user->carrito;
    return view('cart.carrito')
      ->with([
        'detalles' => $datalles
      ]);

  }
}
