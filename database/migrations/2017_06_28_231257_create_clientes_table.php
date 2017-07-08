<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes',function(Blueprint $table){

            $table->increments('id');
            $table->string('nombre_cliente');
            $table->string('rut_cliente', 12)->unique();
            $table->string('direccion');
            $table->integer('telefono');            
            $table->string('usuario')->unique();
            $table->string('pass');

            $table->rememberToken();            
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
        schema::drop('clientes'); 
    }
}
