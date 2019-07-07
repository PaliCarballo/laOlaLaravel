@extends('layouts.plantilla')

@section('contenido')

<div class="container productos">

  <h2>Agregá un nuevo producto</h2>

<form action="/productos" method="post" enctype="multipart/form-data">

  @csrf

    <div class="form-group">
      <label for="name">Nombre del Producto:</label>
    <input type="text" class="form-control" id="name" placeholder="Escribí el nombre del producto" value="{{ old('name') }}" name="name">
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


    <div class="form-group">
      <label for="description">Breve descripción del producto:</label>
      <input type="text-area" class="form-control" id="description" placeholder="Descripción del producto" value="{{ old('description') }}" name="description">
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
        <label for="price">Precio:</label>
        <input type="number" step=".01" class="form-control" id="price" placeholder="Precio del producto" value="{{ old('price') }}" name="price">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="form-group">
        <label for="avatar">Subir imagen:</label>

        <input type="file" id="avatar" name="avatar">
        @error('avatar')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> <br>
    <div class="form-group">
        <label for="avatar1">Subir imagen:</label>

        <input type="file" id="avatar1" name="avatar1">
        @error('avatar1')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> <br>
    <div class="form-group">
        <label for="avatar2">Subir imagen:</label>

        <input type="file" id="avatar2" name="avatar2">
        @error('avatar2')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> <br>
    <div class="form-group">
        <label for="avatar3">Subir imagen:</label>

        <input type="file" id="avatar3" name="avatar3">
        @error('avatar3')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> <br>
    <div class="form-group">
        <label for="avatar4">Subir imagen:</label>

        <input type="file" id="avatar4" name="avatar4">
        @error('avatar4')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> <br>

    <button type="submit" class="btn btn-primary">Agregar Producto</button>
  </form>

</div>




@endsection
