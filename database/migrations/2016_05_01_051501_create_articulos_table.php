<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('codigo');
            $table->string('tipo_articulo');

            $table->string('categoria')->nullable(); //Hombre, mujer, niños, niñas
            
            $table->string('marca')->nullable();

            $table->string('talle')->nullable();
            $table->string('color')->nullable();


            $table->decimal('precio')->nullable();

            
            $table->string('tela')->nullable();

            
            $table->string('friza')->nullable(); // con frisa, sin frisa
            $table->string('motivo')->nullable(); // estampado, lisa, mil rayas, rayas un medio, cuadros chicos, cuadros, fantasia
            $table->string('capucha')->nullable(); //con capucha o sin

     
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
        Schema::drop('articulos');
    }
}
