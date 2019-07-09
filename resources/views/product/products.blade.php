@extends('layouts.plantilla')

@section('contenido')

<form class="" action="/productos" method="get">
<div class="container">

  <!-- <div class="input-group mb-3">
  <input type="text" class="form-control" class="prodName" placeholder="" aria-label="" aria-describedby="">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
  </div>
</div> -->






        <form style="background:white" class="" action="/productos/agregarCarrito" method="post">
@csrf

  @foreach($products as $product)
        <div class="card mb-3" style="max-width: 640px;">
  <div class="row no-gutters">


    <div class="col-md-4">


            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/storage/{{$product->avatar}}" class="d-block w-100" alt="Combo 1 Hamburguesas Veggie">
                </div>
                <div class="carousel-item">
                  <img src="/storage/{{$product->avatar1}}" class="d-block w-100" alt="Combo 1 Hamburguesas Veggie">
                </div>
                <div class="carousel-item">
                  <img src="/storage/{{$product->avatar2}}" class="d-block w-100" alt="Combo 1 Hamburguesas Veggie">
                </div>
                <div class="carousel-item">
                  <img src="/storage/{{$product->avatar3}}" class="d-block w-100" alt="Combo 1 Hamburguesas Veggie">
                </div>
                <div class="carousel-item">
                  <img src="/storage/{{$product->avatar4}}" class="d-block w-100" alt="Combo 1 Hamburguesas Veggie">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><a href='/productos/{{$product->id}}' style="color: black; text-transform: uppercase; font-size: 1.5em">{{$product->name}}</a></h5>
        <h6 class="card-text" style="color:black; font-family: Quicksand, sans serif;">Ingredientes:<br> {{$product->description}}</h6>
        <br>
        <h6 class="card-text" style="color:black"><small class="text-muted">Precio: $ {{$product->price}}</small></h6>
        <br>


          <button type="submit" class="btn btn-warning"  name="product_id" value="{{$product->id}}">Agregar al carrito</button>



@if(isset(Auth::user()->admin))

      <a class="btn btn-success" href="/productos/editar/{{$product->id}}">Editar</a>
      <a class="btn btn-success" href="/productos/delete/{{$product->id}}" >Borrar</a>

@endif

      </div>
    </div>


</div>
</div>
@endforeach

</form>

   {{$products->links()}}







</div>










        <!-- <article class="producto">
                     <div class="producto-hover">
                        <div class="producto-hover-content">
                            <ion-icon name="heart"></ion-icon> <h4>Combo 2</h4>
                        </div>
                    </div>
                    <img src="img/combo2.jpg" alt="Combo 2 Hamburguesas Veggie" >
                </article>
                <article class="producto">
                    <div class="producto-hover">
                        <div class="producto-hover-content">
                            <ion-icon name="heart"></ion-icon> <h4>Combo 3</h4>
                        </div>
                    </div>
                    <img src="img/combo3.jpg" alt="Combo 3 Hamburguesas Veggie">
                </article>
                <article class="producto">
                    <div class="producto-hover">
                        <div class="producto-hover-content">
                            <ion-icon name="heart"></ion-icon> <h4>Combo 4</h4>
                        </div>
                    </div>
                    <img src="img/combo4.jpg" alt="Combo 4 Hamburguesas Veggie">
                </article>
                <article class="producto">
                    <div class="producto-hover">
                        <div class="producto-hover-content">
                            <ion-icon name="heart"></ion-icon> <h4>Combo 5</h4>
                        </div>
                    </div>
                    <img src="img/combo5.jpg" alt="Combo 5 Hamburguesas Veggie" >
                </article>
                <article class="producto">
                    <div class="producto-hover">
                        <div class="producto-hover-content">
                            <ion-icon name="heart"></ion-icon> <h4>Combo 6</h4>
                        </div>
                    </div>
                    <img src="img/combo6.jpg" alt="Combo 6 Hamburguesas Veggie">
                </article>
            </div>
      </section>-->



@endsection
