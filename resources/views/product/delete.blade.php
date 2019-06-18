
<form class="" action="/delete" method="post">
  @csrf
  <h1> {{$product->name}}</h1>
  <input type="hidden" name="id" value="{{$product->id}}">
  <input type="submit" name="" value="Borrar Producto">
</form>
