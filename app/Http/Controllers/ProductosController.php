<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
//use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function index(){
    $productos = Producto::get();

    dd($productos);

    return view('productos.listado',[
        'productos' => $productos
    ]);
    }
}
