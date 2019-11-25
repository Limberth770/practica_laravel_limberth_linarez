<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModoPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modo_pagos')->truncate();

        DB::table('modo_pagos')->insert([
            'nombre' => 'Contado',
            'descripcion' => 'Descripcion pago al contado'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Credito',
            'descripcion' => 'Descripcion pago a credito'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Deposito',
            'descripcion' => 'Descripcion pago via deposito'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'TigoMoney',
            'descripcion' => 'Descripcion pago via TigoMoney'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Transferencia',
            'descripcion' => 'Descripcion pago via transferencia'
        ]);
       
    }
}
