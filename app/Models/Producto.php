<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos';

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function sucursal(){
        return $this->belongsToMany(Sucursal::class, 'prod_suc')
            ->withPivot('producto_id', 'status');    }

    public function prod_suc(){
        return $this->belongsTo(Prod_Suc::class);
    }    
}