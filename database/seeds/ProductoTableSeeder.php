<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->truncate();

        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'LG 32',
            'precio' => '200',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 2,
            'nombre' => 'PC Gamer',
            'precio' => '1500',
            'stock' => '5'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 3,
            'nombre' => 'DELL LATITUDE',
            'precio' => '600',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 4,
            'nombre' => 'World of WarCraft',
            'precio' => '20',
            'stock' => '30'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'Samsung 4K',
            'precio' => '200',
            'stock' => '10'
        ]);       
    }
}
