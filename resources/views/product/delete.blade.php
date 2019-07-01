
  <form class="" action="/productos/delete/{id}" method="post">
    @csrf
    <h1>¿Seguro quiere borrar este producto?</h1>
    <h3> {{$products->name}}</h3>
    <div class="card">
                  <img style= 'width:200px 'src="/storage/{{$products->avatar}}" class="d-block w-100" alt="Combo 1 Hamburguesas Veggie">
    </div>
    <br>
    <input type="hidden" name="id" value="{{$products->id}}">
    <input type="submit" name="" value="Borrar Producto">
  </form>
