@extends('layouts.plantilla')

@section('contenido')

  <div class="log">
    <h2>Registrate</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombre">Nombre y Apellido</label>
            <input id="nombre" type="text" class="form-control"  name="nombre" value="">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="">
            <div class="invalid-feedback"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="" name="password">
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="confPassword">Confirmar contraseña</label>
            <input type="password" class="form-control" id="confPassword" placeholder="" name="confPassword">
            <div class="invalid-feedback"></div>
          </div>
          <div class="col-md-6">
            <label for="avatar">Foto de perfil</label>
            <input id="avatar" type="file" name="avatar" value="">
          </div>
          <button type="submit" class="btn btn-outline-light">Enviar :)</button>
        </div>
    </form>

  </div>

  @endsection
