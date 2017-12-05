<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = ['nome', 'aniversario', 'ativo'];

    public function turma(){
        return $this->belongsToMany('App\Turmas', 'alunos_turmas', 'aluno_id', 'turma_id');
    }

    public function diarios(){
        return $this->hasMany('App\Diarios');
    }
}
