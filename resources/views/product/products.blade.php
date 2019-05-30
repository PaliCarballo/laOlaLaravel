@extends('layouts.plantilla')

@section('contenido')


               
        @foreach($products as $product)
            {{$product->name}}<br>
        
        @endforeach


<section id="productosDestacados">
        <div class="titulo-productos">
          <h3>Nuestros Productos</h3>
          <hr>
        </div>
            <div class="container-productos">
                <article class="producto">
                    <div class="producto-hover">
                        <div class="producto-hover-content">
                            <ion-icon name="heart"></ion-icon> <h4>Combo 1</h4>
                        </div>
                    </div>
                    <img src="img/combo1.jpg" alt="Combo 1 Hamburguesas Veggie">
                </article>
                <article class="producto">
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
      </section>

      

@endsection