@extends('layouts.master')
@section('title', 'Registro_Sucursal')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>REGISTRO DE SUCURSALES</i></h2>
  <hr>

<div>  
<form action ="{{ url('/sucursales') }}" method="POST">
@csrf
  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div> 

  <div align="right" class="mb-2 row">
    <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="ciudad" name="ciudad">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>

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

@stop

@section('footer')
<hr><a href="/sucursales" type="button" class="btn btn-secondary">Volver</a>
@stop