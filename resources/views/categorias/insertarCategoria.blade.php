@extends('layouts.master')
@section('title', 'Registro_Categoría')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>REGISTRO DE CATEGORÍAS</i></h2>
  <hr>

<div>  
<form action ="{{ url('/categorias') }}" method="POST">
@csrf
  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div> 

  <div align="right" class="mb-2 row">
    <label for="descripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
  </div>

  <button type="submit" class="btn btn-primary btn-lg">Guardar</button>       
  
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif  

</form>
</div>

</body>  

@stop

@section('footer')
<hr><a href="/categorias" type="button" class="btn btn-secondary">Volver</a>
@stop