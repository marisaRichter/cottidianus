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
            $table->integer('aluno_turma_id')->unsigned();
            $table->text('descricao');
            $table->integer('comportamento_id')->unsigned();
            $table->date('data');
            $table->foreign('aluno_turma_id')->references('id')->on('alunos_turmas');
            $table->foreign('comportamento_id')->references('id')->on('comportamentos');
            $table->index('aluno_turma_id');
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
