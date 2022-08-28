<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index(){$categorias = Categoria::get();

        dd($categorias);
    
        return view('categorias.listado',[
            'categorias' => $categorias
        ]);
        //return view('categorias.listado');
    }
}
