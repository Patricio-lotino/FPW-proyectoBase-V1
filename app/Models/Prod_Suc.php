<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_Suc extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'prod_suc';

    public function productos(){
        return $this->belongsTo(Producto::class);
    }

    public function sucursales(){
        return $this->belongsTo(Sucursal::class);
    }
}
