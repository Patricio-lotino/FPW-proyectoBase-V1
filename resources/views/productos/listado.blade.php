@extends('layouts.master') 

@section('title', 'Listado_Productos')

@section('content')

<h2><i>LISTADO DE PRODUCTOS</i></h2>
<hr>

<body style="background-color:#EBDEF0">

<div class="row">
    @foreach($productos as $producto)
        <div class="col-3">
            <div class="card">
                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                <div class="card-body">
                    <h5 class= "card-title">{{ $producto->nombre}}</h5>
                    <p class= "card-text">{{ $producto->descripcion}}</p>
                </div>
            </div>    
        </div>
    @endforeach
</div>

</body>

@stop

@section('footer')
<br>
<hr>
<br>
<a href="/productos/create" type="button" class="btn btn-secondary">Agregar Producto</a>
<br>  
@stop