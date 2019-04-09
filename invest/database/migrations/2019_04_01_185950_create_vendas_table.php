<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id_vendas');
            $table->string('tipo'); //investimento ou resgate
            $table->integer('quantidades'); //ações
            $table->float('valorVenda'); //valor individual das ações
            $table->integer('empresa_id')->unsigned();            
            $table->foreign('empresa_id')->references('id')->on('empresas'); // tabela com s no final
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
