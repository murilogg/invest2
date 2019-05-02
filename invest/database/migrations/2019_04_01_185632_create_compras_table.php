<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo'); //investimento ou resgate
            $table->integer('quantidade'); //quantidade de ações compradas
            $table->float('valorCompra'); //valor individual das ações
            $table->string('nomeEmpresa');
            $table->integer('empresa_id')->unsigned();            
            $table->foreign('empresa_id')->references('id')->on('empresas'); // tabela com s no final
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('compras');
    }
}
