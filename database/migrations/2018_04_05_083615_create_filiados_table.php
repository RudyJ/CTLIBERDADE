<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('filiados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula')->unique();
            $table->string('nome', 255);
            $table->integer('cpf');
            $table->string('rg');
            $table->string('email');
            $table->string('logradouro');
            $table->string('complemento');            
            $table->string('num');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('foto', 255)->nullable();
            $table->string('password');
            $table->longtext('public_key', 99999999);
            $table->longtext('private_key', 99999999);
            $table->double('anuidade', 10, 2);
            $table->timestamps();
            $table->integer('status')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filiados');
    }
}
