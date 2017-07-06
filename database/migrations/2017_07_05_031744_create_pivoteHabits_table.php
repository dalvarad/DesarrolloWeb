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

            $table->increments('id');
            $table->integer('id_us')->unsigned();
            $table->integer('id_ha')->unsigned();
            $table->date('hora_inicio');
            $table->date('hora_termino');

            $table->foreign('id_us')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_ha')->references('id')->on('habitaciones')->onDelete('cascade');

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
