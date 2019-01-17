<?php

use Illuminate\Database\Seeder;

class evaluacion_grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluacion_grupos')->insert([
            ['id'=> 1, 'grupo'=>101],
        	['id'=> 2, 'grupo'=>102],
        	['id'=> 3, 'grupo'=>201],
        	['id'=> 4, 'grupo'=>202],
        	['id'=> 5, 'grupo'=>301],
        	['id'=> 6, 'grupo'=>302],
        	['id'=> 7, 'grupo'=>401],
        	['id'=> 8, 'grupo'=>402],
            ['id'=> 9, 'grupo'=>501],
            ['id'=> 11,'grupo'=>502],
            ['id'=> 12,'grupo'=>601],
            ['id'=> 13,'grupo'=>602],
            ['id'=> 14,'grupo'=>701],
            ['id'=> 15,'grupo'=>702],
            ['id'=> 16,'grupo'=>801],
            ['id'=> 17,'grupo'=>802]
        ]);
    }
}
