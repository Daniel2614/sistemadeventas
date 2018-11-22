<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SistemaventaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemadeventa_cliente', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidop')->nullable();
            $table->string('apellidom');
            $table->string('rfc');
            $table->string('cp');
            $table->string('ciudad');
            $table->string('calle');
            $table->string('numero');
            
            
     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
