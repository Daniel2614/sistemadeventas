<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SistemaventasVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha')->default("1900-01-01");
            $table->string('descuento', 50)->nullable();
            $table->integer('montoFinal')->nullable();
            //$table->string('rfc', 20)->default("AAAA000101");
            $table->integer('idCliente')->unsigned()->default(1);
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            //$table->dateTime('fechaNacimiento')->default("1900-01-01");
            //$table->string('curp', 20)->nullable();
            //$table->string('sexo', 20)->default("SIN INFORMACION");
            //$table->boolean('esEmpresa')->default(false);
            //$table->integer('idEstadoOrigen')->nullable()->unsigned();
            //$table->foreign('idEstadoOrigen')->references('id')->on('cat_estado')->onDelete('cascade');
            //$table->integer('idNacionalidad')->unsigned()->default(132);
            //$table->foreign('idNacionalidad')->references('id')->on('cat_nacionalidad')->onDelete('cascade');
            /*$table->integer('idEtnia')->unsigned()->default(13);
            $table->foreign('idEtnia')->references('id')->on('cat_etnia')->onDelete('cascade');
            $table->integer('idLengua')->unsigned()->default(69);
            $table->foreign('idLengua')->references('id')->on('cat_lengua')->onDelete('cascade');*/
            //$table->integer('idMunicipioOrigen')->unsigned()->default(2496);
            //$table->foreign('idMunicipioOrigen')->references('id')->on('cat_municipio')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
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
