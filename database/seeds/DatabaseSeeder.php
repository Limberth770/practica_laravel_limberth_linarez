<?php

use Illuminate\Database\Seeder;
//use database\seeds\ClientesTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //dd('ClientesTableSeeder');
        // $this->call(UsersTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
    }
}
