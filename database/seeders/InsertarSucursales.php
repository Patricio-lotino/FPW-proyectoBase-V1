<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'nombre' => 'Playa Blanca',
                'ciudad' => 'La Serena'
            ],
            [
                'nombre' => 'El Corralero',
                'ciudad' => 'Curico'
            ],
            [
                'nombre' => 'Campo Lindo',
                'ciudad' => 'Osorno'
            ]
            )); 
    }
}
