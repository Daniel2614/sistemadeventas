<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(evaluacion_grupoSeeder::class);
        $this->call(evaluacion_licenciaturasEscoSeeder::class);
        $this->call(evaluacion_maestrosSeeder::class);
    }
}
