<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivoteHabitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivotehabits',function(Blueprint $table){

            $table->increments('id_reserva');
            $table->integer('id_us')->unsigned();
            $table->integer('id_ha')->unsigned();
            $table->date('hora_inicio');
            $table->date('hora_termino');

            $table->foreign('id_us')->references('id_usuario')->on('usuarios');
            $table->foreign('id_ha')->references('id_hab')->on('habitaciones');

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
        schema::drop('pivotehabits');
    }
}
