@extends('layouts.master')
@section('title', 'Registro_Producto')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>REGISTRO DE PRODUCTOS</i></h2>
  <hr>

<div>  
<form action ="{{ url('/productos') }}" method="POST" enctype='multipart/form-data'>
    @csrf
  <div align="right" class="mb-2 row">
    <label for="codigo" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="codigo" name="codigo">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="descripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="cantidad" name="cantidad">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="precio" class="col-sm-2 col-form-label">Precio de venta</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="precio" name="precio">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
    <div class="col-sm-5">
      <input type="file" class="form-control" id="imagen" name="imagen" accept='.jpg, .png, .jpeg'>
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="categoria_id" class="col-sm-2 col-form-label">Categoría_Id</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="categoria_id" name="categoria_id">
    </div>
  </div>

  <div class="mb-2 row">
    <label for="">SUCURSAL</label>
    <select name="sucursal_id" id="inputSucursal_id" class="form-control">
      <option value="">Seleccione la Sucursal</option>
      @foreach($sucursales as $sucursal)
        <option value="{{ $sucursal['id'] }}">{{ $sucursal['nombre']}}</option>
      @endforeach
    </select>
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

</body>

@stop

@section('footer')
<hr><a href="/productos" type="button" class="btn btn-secondary">Volver</a>
@stop