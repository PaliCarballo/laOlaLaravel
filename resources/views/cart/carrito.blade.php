@extends('layouts.plantilla')

@section('contenido')
@foreach($detalles as $detalle)



<form class="" action="/carrito/sacarCarrito" method="post">
@csrf
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="storage/{{$detalle->avatar}}" class="card-img" alt="...">
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h5 style='color:black'  class="card-title">{{$detalle->name}}</h5>
        <p class="card-text"><a href="#">Ver detalle</a></p>
        <p class="card-text"><small class="text-muted">{{$detalle->price}}</small></p>

        <button type="submit" name="detalle_id" value="{{$detalle->id}}">sacar del carrito</button>

      </div>
    </div>
  </div>
</div>
</form>



@endforeach
   @endsection
