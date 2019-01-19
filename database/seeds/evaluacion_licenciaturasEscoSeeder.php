<?php

use Illuminate\Database\Seeder;

class evaluacion_licenciaturasEscoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluacion_licenciaturas_escolarizado')->insert([
            ['id'=> 1, 'clave'=>'AE', 'nombre'=>'ADMINISTRACIÓN DE EMPRESAS'],
        	['id'=> 2, 'clave'=>'CE', 'nombre'=>'CIENCIAS DE LA EDUCACIÓN'],
        	['id'=> 3, 'clave'=>'CT', 'nombre'=>'CIENCIAS Y TECNICAS DE LA COMUNICACIÓN'],
        	['id'=> 4, 'clave'=>'DE', 'nombre'=>'DERECHO'],
        	['id'=> 5, 'clave'=>'IM', 'nombre'=>'INGENIERÍA MECATRONICA'],
        	['id'=> 6, 'clave'=>'IN', 'nombre'=>'NEGOCIOS INTERNACIONALES'],
        	['id'=> 7, 'clave'=>'LM', 'nombre'=>'MERCADOTECNIA'],
        	['id'=> 8, 'clave'=>'PS', 'nombre'=>'PSICOLOGÍA'],
            ['id'=> 9, 'clave'=>'CX', 'nombre'=>'CELEUX']
           
        ]);
    }
}
