<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios',function(Blueprint $table){

            $table->increments('id_usuario');
            $table->string('nombre_usuario');
            $table->string('rut_usuario');
            $table->string('usuario');
            $table->string('pass');
            $table->enum('tipo', ['administrador','recepcionista']);
            $table->string('slug');

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
        schema::drop('usuarios');
    }
}
