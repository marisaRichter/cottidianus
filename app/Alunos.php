<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = ['nome', 'aniversario'];

    public function turma(){
        return $this->belongsToMany('App\Turmas', 'alunos_turmas', 'aluno_id', 'turma_id');
    }
}
