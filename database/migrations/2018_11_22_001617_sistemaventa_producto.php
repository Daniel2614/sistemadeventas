<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SistemaventaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemadeventa_producto', function(Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombrep')->nullable();
            $table->string('descripcion');
            $table->string('precio');
            $table->string('stock');
            
            
     
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
