<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'codigo' => '20001',
                'nombre' => 'Escritorio americano',
                'descripcion' => 'Escritorio sencillo solo con cubierta',
                'cantidad' => 20,
                'precio' => 50000,
                'imagen' => 'https://static.elcontainer.cl/20451-big_default/escritorio-hoobro-bf68dn01.jpg',
                'categoria_id' => 2
            ],
            [
                'codigo' => '10001',
                'nombre' => 'Repisa un cuerpo',
                'descripcion' => 'Repisa de vidrio de un cuerpo',
                'cantidad' => 30,
                'precio' => 30000,
                'imagen' => 'https://www.paris.cl/dw/image/v2/BCHW_PRD/on/demandware.static/-/Sites-cencosud-master-catalog/default/dw3eccc23a/images/imagenes-productos/730/952713-0201-001.jpg?sw=1480&sh=2000&sm=fit',
                'categoria_id' => 1
            ],
            [
                'codigo' => '30001',
                'nombre' => 'Colchon 1 plaza',
                'descripcion' => 'Colchon de una plaza de origen nacional',
                'cantidad' => 30,
                'precio' => 60000,
                'imagen' => 'https://easycl.vtexassets.com/arquivos/ids/297648/886677.jpg?v=637530169064530000',
                'categoria_id' => 3
            ],
            [
                'codigo' => '10002',
                'nombre' => 'Mesa con 4 sillas',
                'descripcion' => 'Mesa con 4 sillas metalicas origen chino',
                'cantidad' => 20,
                'precio' => 55000,
                'imagen' => 'https://www.abcdin.cl/media/catalog/product/1/1/1157446f13.jpg?optimize=high&fit=bounds&height=&width=&canvas=:',
                'categoria_id' => 1
            ]
            ));
    }
}
