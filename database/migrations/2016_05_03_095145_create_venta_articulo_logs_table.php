<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaArticuloLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_articulo_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo');
            $table->string('tipo_articulo');

            $table->string('categoria')->nullable(); //Hombre, mujer, niños, niñas
            
            $table->string('marca')->nullable();

            $table->string('talle')->nullable();
            $table->string('color')->nullable();

            $table->string('precio')->nullable();

            $table->string('forma_pago')->nullable();

        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venta_articulo_logs');
    }
}
