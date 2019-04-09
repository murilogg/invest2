<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome'); // nome da empresa
            $table->string('descricao'); //taxa de juros que rende ao investidor
            $table->string('sigla'); //sigla selic cdi 
            $table->string('categoria'); //comida, minerio
            $table->integer('acoes'); //ações da empresa
            $table->float('preco', 8, 3); // valor das ações da empresa
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
        Schema::dropIfExists('empresas');
    }
}
