@extends('layouts.master') 

@section('title', 'Listado_Sucursales')

@section('content')

  <h2><i>LISTADO DE SUCURSALES</i></h2>
  <hr>

  <body style="background-color:#EBDEF0">
  
  <form>

  <legend>Elige una opción de búsqueda</legend>
    <label>
      <input type="radio" name="opcion" value="todas"> TODAS
    </label>
    <label>
      <input type="radio" name="opcion" value="nombre"> NOMBRE
    </label>
    
  </form></br>

  <div class="row">
    @foreach($sucursales as $sucursal)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class= "card-title">{{ $sucursal->nombre}}</h5>
                    <p class= "card-text">{{ $sucursal->ciudad}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<hr><a href="/sucursales/create" type="button" class="btn btn-secondary">Agregar Sucursal</a>
  
</body>

@stop

@section('footer')
<hr><a href="/productos" type="button" class="btn btn-secondary">Volver</a>
@stop
