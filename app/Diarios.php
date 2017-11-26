<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diarios extends Model
{
    protected $fillable = ['turma_id', 'aluno_id', 'comportamento_id', 'descricao', 'data'];

    public function alunos() {
        return $this->belongsTo('App\Alunos');
    }

    public function turmas() {
        return $this->belongsTo('App\Turmas');
    }

    public function comportamentos() {
        return $this->belongsTo('App\Comportamentos');
    }
}