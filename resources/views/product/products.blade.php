@extends('layouts.plantilla')

@section('contenido')

<div class="container">
<!-- BUSCADOR -->
    <form style="padding: 0 15px;" class="" action="/productos" method="get">
      <div class="input-group mt-3">
        <input type="text" name="name" class="form-control" placeholder="Busca acá tus productos" aria-label="Busca acá tus productos" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
            </div>
      </div>
    </form>

    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif


      <div class="row" id="div-papi">
        @foreach($products as $product)
      <div class="col-sm-6" id="div-producto{{$product->id}}">
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
                    <h5 class="card-title" style="color: black; text-transform: uppercase; font-size: 1.5em">{{$product->name}}</h5>
                    <h6 class="card-text" style="color:black; font-family: Quicksand, sans serif;">Ingredientes:<br> {{$product->description}}</h6>
                    <br>
                    <h6 class="card-text" style="color:black"><small class="text-muted">Precio: $ {{$product->price}}</small></h6>
                    <br>


                    <form style="background:white" class="" action="/productos/agregarCarrito" method="post">
                        @csrf
                      <!-- <input type="number" name="cantidad" min =1 value=""> -->
                      <button type="submit" class="btn btn-warning"  name="product_id" value="{{$product->id}}">Agregar al carrito</button>



                    @if((Auth::user())&& (Auth::user()->admin))
                      <a class="btn btn-success" href="/productos/editar/{{$product->id}}">Editar</a>
                      <a class="btn btn-success" href="#" data-toggle="modal" data-target="#producto{{$product->id}}">Borrar</a>


                    @endif

                  </form>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="producto{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <form class="modal-eliminar" id="form-{{$product->id}}" action="/productos/delete/{{$product->id}}" method="post">
                    @csrf
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Seguro querés eliminar este producto?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="color: black;">
                    {{$product->name}}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>

                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="submit" class="btn btn-danger" name="" value="Borrar Producto">
                  </div>

                </form>

                </div>
              </div>
            </div>
            <!-- end modal -->
        @endforeach
      </div>

    {{$products->links()}}

</div>






<script type="text/javascript" src="js/librerias.js"></script>
<script src="js/products.js"></script>

@endsection
