@extends('layouts.plantilla')

@section('contenido')

           <form class="" action="/productos/buscar" method="get">
               <input type="text" name="name" value="" class="form-control">
               <button type="submit" class="btn btn-primary">Buscar</button>
             </form>

            @if (session('mensaje'))
               <div class="alert alert-success">
                   {{ session('mensaje') }}
               </div>
            @endif

          @foreach($caca as $product)
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


          </div>
          </div>



          </div>
          </div>
          @endforeach





@endsection
