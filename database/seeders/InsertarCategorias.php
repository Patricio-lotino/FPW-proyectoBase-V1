<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nombre' => 'Muebles de cocina',
                'descripcion' => 'Muebles para la cocina'
            ],
            [
                'nombre' => 'Muebles de oficina',
                'descripcion' => 'Muebles para la oficina'
            ],
            [
                'nombre' => 'Muebles de dormitorio',
                'descripcion' => 'Muebles para el dormitorio'
            ]
            ));
    }
}
