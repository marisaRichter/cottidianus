<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turmas;
use App\Alunos;
use App\Http\Requests\TurmasRequest;
use Illuminate\Support\Facades\View;

class TurmasController extends Controller
{
  public function index() {
    $turmas = Turmas::all();
    return view('turmas.index', ['turmas' => $turmas]);
  }

  public function view($id){
    $turma = Turmas::find($id);
    return view('turmas.view', ['turma' => $turma]);
  }

  public function create() {
    $alunos = Alunos::pluck('nome', 'id')->all();
    return view('turmas.create')->with('alunos', $alunos);
  }

  public function store(TurmasRequest $request) {
    $turma = new Turmas();
    $turma->nome = $request->get('nome');
    $turma->descricao = $request->get('descricao');
    $turma->user_id=1;
    $turma->save();
    // Adicionando alunos na turma
    $turma->alunos()->attach($request->get('alunos_turmas'));
    

    return redirect()->route('turmas');
  }

  public function delete($id) {
    Turmas::find($id)->delete();

    return redirect()->route('turmas');
  }

  public function edit($id) {
    $turma = Turmas::find($id);
    $alunos = Alunos::pluck('nome', 'id')->all();

    return view('turmas.edit', compact('turma', 'alunos'));
  }

  public function update(TurmasRequest $request, $id) {
    $turma = Turmas::find($id);
    $turma->nome = $request->get('nome');
    $turma->descricao = $request->get('descricao');
    $turma->user_id=1;
    $turma->update();
    // Adicionando alunos na turma
    $turma->alunos()->sync($request->get('alunos_turmas'));

    return redirect()->route('turmas.view', ['id' => $id]);
  }
}
