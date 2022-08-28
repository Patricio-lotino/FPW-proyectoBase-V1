<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductosController extends Controller
{
    public function index(){
    $productos = Producto::get();
    
    return view('productos.listado',[
        'productos' => $productos
    ]);
    }

    public function create(){
        return view('productos.insertarProducto');
    }

    public function store(Request $request){
        $this->validate($request, [
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'integer',
            'precio' => 'integer',
            'imagen' => 'required',
            'categoria_id' => 'required'
            ]);
        
        $producto = new Producto();
        $producto->codigo = $request->codigo;
        $producto->nombre  = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->imagen = $request->imagen;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();

        $productos = Producto::get();

    return view('productos.listado',[
        'productos' => $productos
    ]);              
    
    }
}