

@extends('layouts.plantilla')

@section('contenido')


<div class="fondo-banner">
    <div class="texto-banner">

        <h1>HAMBURGUESAS</h1>
        <h2>VEGGIES</h2>
        <p>100% Artesanales & Sin Conservantes</p>
    </div>
    <a href="#sobreNosotros">Conocé más de nosotros</a>
    <a href="/productos">Hacé tu pedido</a>
  </div>

  <section id="productosDestacados">
    <div class="titulo-productos">
      <h3>Productos Destacados</h3>
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

  <section id="sobreNosotros">
    <h3>- TE LLEVA LA OLA -</h3>
    <p>Creemos que aportar valor es fundamental para nuestro crecimiento. Queremos acompañarte en mejorar tu alimentación y así puedas sentir vitalidad y energía en cada día. Realizamos nuestra labor con dedicación y amor, donde cuidar cada detalle es importante. <br>
    Por ello ofrecemos un producto artesanal, donde los sabores se conservan tal cual a la materia prima, <strong> 100% natural, sin agregados artificiales ni químicos.</strong>
    La Ola te propone preparar tus comidas de una manera simple y sana.
  <img src="img/icono-logo.png" alt=""></p>

  </section>


@endsection
