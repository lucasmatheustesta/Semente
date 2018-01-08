<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(ServicoSeeder::class);
    }
}
