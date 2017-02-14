<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->string('telefone1');
            $table->string('telefone2')->nullable();
            $table->string('email')->unique();
            $table->integer('idCurso')->unsigned();
            $table->foreign('idCurso')->references('id')->on('cursos');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alunos');
    }
}
