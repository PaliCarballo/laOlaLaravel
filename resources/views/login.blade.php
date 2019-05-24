@extends('layouts.plantilla')

@section('contenido')

 <div class="log">
   <h2>Logueate</h2>
    <form class="login" action="" method="post">
      <div class="form-row">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder= "Ingresá tu email" name="email"
           >
      </div>
      <div class="form-row">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
        <div class="invalid-feedback"></div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="recordar">
        <label class="form-check-label" for="defaultCheck1">Recuérdame</label>
      </div>
      <button type="submit" class="btn btn-outline-light">Enviar :)</button>

    </form>
  </div>

  @endsection
