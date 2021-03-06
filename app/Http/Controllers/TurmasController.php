<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turmas;
use App\Alunos;
use App\Http\Requests\TurmasRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class TurmasController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function index() {
    $professorID = Auth::id();
    $turmas = Turmas::where(['visible' => true, 'user_id' => $professorID])->get();
    return view('turmas.index', ['turmas' => $turmas]);
  }

  public function view($id){
    $turma = Turmas::find($id);
    return view('turmas.view', ['turma' => $turma]);
  }

  public function create() {
    $alunos = Alunos::where(['ativo' => true])->pluck('nome', 'id')->all();
    return view('turmas.create')->with('alunos', $alunos);
  }

  public function store(TurmasRequest $request) {
    $turma = new Turmas();
    $turma->nome = $request->get('nome');
    $turma->descricao = $request->get('descricao');
    $turma->user_id = Auth::id();
    if ($turma->save()){
      flash('Turma salva com sucesso!')->success();
    } else {
      flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
    }
    // Adicionando alunos na turma
    $turma->alunos()->attach($request->get('alunos_turmas'));    

    return redirect()->route('turmas');
  }

  public function delete($id) {
    if (Turmas::find($id)->update(['visible' => false])){
      flash('Turma removida com sucesso!')->success();
    } else {
      flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
    }

    return redirect()->route('turmas');
  }

  public function edit($id) {
    $turma = Turmas::find($id);
    $alunos = Alunos::where(['ativo' => true])->pluck('nome', 'id')->all();

    return view('turmas.edit', compact('turma', 'alunos'));
  }

  public function update(TurmasRequest $request, $id) {
    $turma = Turmas::find($id);
    $turma->nome = $request->get('nome');
    $turma->descricao = $request->get('descricao');
    if ($turma->update()){
      flash('Turma salva com sucesso!')->success();
    } else {
      flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
    }
    // Adicionando alunos na turma
    $turma->alunos()->sync($request->get('alunos_turmas'));

    return redirect()->route('turmas.view', ['id' => $id]);
  }
}
