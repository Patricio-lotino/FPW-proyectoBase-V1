<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();

        dd($sucursales);
    
        return view('sucursales.listado',[
            'sucursales' => $sucursales
        ]);
        //return view('categorias.listado');
    }
}
