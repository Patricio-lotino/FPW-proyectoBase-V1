@extends('layouts.master') 

@section('title', 'Listado')

@section('content')

<h2><i>LISTADO DE PRODUCTOS</i></h2>
<hr>

<body style="background-color:#EBDEF0">

<form>

  <legend>Elige una opción de búsqueda</legend>
    <label>
      <input type="radio" name="opcion" value="código"> CÓDIGO
    </label>
    <label>
      <input type="radio" name="opcion" value="nombre"> NOMBRE
    </label>
    <label>
      <input type="radio" name="opcion" value="sucursal"> SUCURSAL
    </label>
    <label>
      <input type="radio" name="opcion" value="categoria"> CATEGORIA
    </label>
    <label>
      <input type="radio" name="opcion" value="estado"> ESTADO
    </label>

</form></br>

<div class="row">
    @foreach($productos as $producto)
        <div class="col-3">
            <div class="card">
                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                <div class="card-body">
                    <h5 class= "card-title">{{ $producto->nombre}}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar</button>       
  </div></br>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/menuProductos">Ir al Menú</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Ir a Inicio</a>
  </div>
  
  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>   

</body>

@stop