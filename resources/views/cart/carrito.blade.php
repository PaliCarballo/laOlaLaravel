@extends('layouts.plantilla')

@section('contenido')

<?php
      $suma = 0;
      ?>
@foreach($detalles as $detalle)

<form class="carrito-form" action="/carrito/sacarCarrito" method="post">
@csrf
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item"><img src="storage/{{$detalle->avatar}}" class="card-img" alt="..."></li>
      <li class="list-group-item"><h5 style='color:black'  class="card-title">{{$detalle->name}}</h5>
      <p class="card-text"><a href="#">Ver detalle</a></p></li>
      <li class="list-group-item"><p class="card-text"><small class="text-muted">${{$detalle->price}}</small></p></li>
      <li class="list-group-item"><button type="submit" name="detalle_id" class="btn btn-dark active" value="{{$detalle->id}}">sacar del carrito</button></li>
    </ul>

</form>

<?php  $subtotal[]= $detalle->price;

 $suma = array_sum($subtotal);

?>

@endforeach




  <div class="total-carrito"class="card-body text-dark">
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item"></li>
      <li class="list-group-item"><h5 style='color:black'  class="card-title">Total:</h5></li>
      <li class="list-group-item" ><strong>{{$suma}}</strong></li>
    </ul>
  </div>
   @endsection
