@extends('layouts.master') 

@section('title', 'Listado_Productos')

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
                    <p class= "card-text">{{ $producto->descripcion}}</p>
                    <p class= "card-text">{{ "$" . $producto->precio}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<hr><a href="/productos/create" type="button" class="btn btn-secondary">Agregar Producto</a>
  
</body>

@stop