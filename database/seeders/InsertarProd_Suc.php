<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProd_Suc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prod_suc')->insert(array(
            [
                'producto_id' => '1',
                'sucursal_id' => '3'
                ],
            [
                'producto_id' => '2',
                'sucursal_id' => '2'
            ],
            [
                'producto_id' => '3',
                'sucursal_id' => '1'
            ],
            [
                'producto_id' => '4',
                'sucursal_id' => '2'
            ]
            ));
    }
}
