<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('clientes')->truncate();

        DB::table('clientes')->insert([
            'nombre' => 'Limberth',
            'apellido' => 'Linarez Ortuño',
            'direccion' => 'Calle Rio Parana',
            'fecha_nacimiento' => '1985-06-21',
            'telefono' => '73760713',
            'email' => 'limberth770@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Aaron',
            'apellido' => 'Linarez Escalier',
            'direccion' => 'Calle Rio Parana',
            'fecha_nacimiento' => '2015-04-28',
            'telefono' => '73760713',
            'email' => 'aaronlinarez770@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Giuseppe',
            'apellido' => 'Linarez Escalier',
            'direccion' => 'Calle Rio Parana',
            'fecha_nacimiento' => '2018-04-10',
            'telefono' => '73760713',
            'email' => 'giuseppelinarez770@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Linda',
            'apellido' => 'Escalier de Linarez',
            'direccion' => 'Calle Rio Parana',
            'fecha_nacimiento' => '1992-11-07',
            'telefono' => '74938552',
            'email' => 'lindaescalier770@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Thiago',
            'apellido' => 'Almanza Linarez',
            'direccion' => 'Calle Rio Madre de Dios y Rio Yata',
            'fecha_nacimiento' => '2015-07-10',
            'telefono' => '73760713',
            'email' => 'thiagoalmanzalinarez770@gmail.com'
        ]);
    }
}
