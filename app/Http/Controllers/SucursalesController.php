<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();
    
        return view('sucursales.listado',[
            'sucursales' => $sucursales
        ]);
    }

    public function create(){
        return view('sucursales.insertarSucursal');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'ciudad' => 'required',
            ]);
        
        $sucursal = new Sucursal();
        $sucursal->nombre  = $request->nombre;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->save();

        $sucursales = Sucursal::get();

    return view('sucursales.listado',[
        'sucursales' => $sucursales
    ]);              
    
    }
}
