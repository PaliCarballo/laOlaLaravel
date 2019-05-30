@extends('layouts.plantilla')

@section('contenido')

<form action="/AgregarProducto" method="post" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="name">Nombre del Producto:</label>
    <input type="text" class="form-control" id="name" placeholder="Escribí el nombre del producto" value="{{ old('name') }}">
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


    <div class="form-group">
      <label for="description">Breve descripción del producto:</label>
      <input type="text-area" class="form-control" id="description" placeholder="Descripción del producto" value="{{ old('description') }}">
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
        <label for="price">Precio:</label>
        <input type="number" step=".01" class="form-control" id="price" placeholder="Precio del producto" value="{{ old('price') }}">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="avatar">Subir imagen:</label>
        <input type="file" id="avatar">
        
    </div> <br>
    
    <button type="submit" class="btn btn-primary">Agregar Producto</button>
  </form>






@endsection