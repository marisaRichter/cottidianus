<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('turma_id')->unsigned();
            $table->integer('aluno_id')->unsigned();
            $table->integer('comportamento_id')->unsigned();
            $table->text('descricao');
            $table->date('data');
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('comportamento_id')->references('id')->on('comportamentos');
            $table->index('turma_id');
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
        Schema::dropIfExists('diarios');
    }
}
