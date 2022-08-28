@extends('layouts.master') 

@section('title', 'Listado_Categorias')

@section('content')

<h2><i>LISTADO DE CATEGORÍAS</i></h2>
<hr>

<body style="background-color:#EBDEF0">
 
<form>  
    
</form></br>

<div class="row">
    @foreach($categorias as $categoria)
        <div class="col-3">
            <div class="card">
                    <div class="card-body">
                    <h5 class= "card-title">{{ $categoria->nombre}}</h5>
                    <p class= "card-text">{{ $categoria->descripcion}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<hr><a href="/categorias/create" type="button" class="btn btn-secondary">Agregar Categoría</a>

</body>

@stop

@section('footer')
<hr><a href="/productos" type="button" class="btn btn-secondary">Volver</a>
@stop

