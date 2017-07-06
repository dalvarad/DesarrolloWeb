<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('habitaciones',function(Blueprint $table){

            $table->increments('id');
            $table->integer('valor');
            $table->enum('estado', ['ocupada','desocupada'])->default('desocupada');
            $table->enum('tipo_de_habitacion', ['single','matrimonial', 'double'])->default('single');

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
        schema::drop('habitaciones'); 
    }
}
