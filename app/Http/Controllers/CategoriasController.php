<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::get();
        return view('categorias.listado',[
            'categorias' => $categorias
        ]);
    }

    public function create(){
        return view('categorias.insertarCategoria');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required'
            ]);
        
        $categoria = new Categoria();
        $categoria->nombre  = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        $categorias = Categoria::get();

    return view('categorias.listado',[
        'categorias' => $categorias
    ]);              
    
    }
}
