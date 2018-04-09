<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('filiado')->unsigned();
            $table->foreign('filiado')->references('id')->on('users')->onDelete('cascade');

            $table->double('valor', 10, 2);
            $table->integer('forma');
            $table->integer('parcelas');
            $table->longtext('token', 99999999); // de transação do pagseguro
            $table->integer('transaction_type');
            $table->timestamps();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuidades');
    }
}
