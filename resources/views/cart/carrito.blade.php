@extends('layouts.plantilla')

@section('contenido')
<div class="container" style="margin-bottom: 50px;">
    <?php
          $suma = 0;
          ?>
    @foreach($detalles as $detalle)

    <form class="" action="/carrito/sacarCarrito" method="post">
    @csrf

<br>
<a class="btn btn-success" href="/productos
">Seguir Comprando</a>
<br>
            <div class="card-group">
              <div class="card">
                  <div class="card-body" id="avatar-carrito" style="max">
                  <img src="storage/{{$detalle->avatar}}" class="card-img" alt="..."alt="Max-width 10%">
                </div>
              </div>
              <div class="card" id="prodcuto-nombre" >
                <div class="card-body">
                  <h5 style='color:black'  class="card-title">{{$detalle->name}}</h5>
              </div>
              </div>
              <div class="card" id="producto-precio">
                <div class="card-body">
                  <p class="card-text"><small class="text-muted">Pack por 4 U: ${{$detalle->price}}</small></p>
                </div>
              </div>
              <div class="card" id="boton-sacarCarrito">
                <button type="submit" name="detalle_id" class="btn btn-dark active" value="{{$detalle->id}}">sacar del carrito</button>
              </div>
            </div>


    </form>

<?php  $subtotal[]= $detalle->price;

 $suma = array_sum($subtotal);

?>

@endforeach




  <div class="total-carrito"class="card-body text-dark" class="h-50 d-inline-block" class="width:80%;">
    <ul class="list-group list-group-horizontal">

      <li class="list-group-item"><h5 style='color:black'  class="card-title">Total:</h5></li>
      <li class="list-group-item" ><strong>${{$suma}}</strong></li>
    </ul>
  </div>

</div>
   @endsection
