<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function alunos() {
        return $this->belongsToMany('App\Alunos', 'alunos_turmas', 'turma_id', 'aluno_id');
    }

    public function diarios(){
        return $this->hasMany('App\Diarios');
    }
}
