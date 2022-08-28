<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursales';

    public function productos(){
        return $this->belongsToMany(Producto::class, 'prod_suc')
            ->withPivot('sucursal_id','status');
    }
    
    public function prod_suc(){
        return $this->belongsTo(Prod_Suc::class);
    }
}
