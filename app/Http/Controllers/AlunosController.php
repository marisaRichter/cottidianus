<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alunos;
use App\Http\Requests\AlunosRequest;

class AlunosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function index() {
    $alunos = Alunos::all();
    return view('alunos.index', ['alunos' => $alunos]);
  }

  public function create() {
    return view('alunos.create');
  }

  public function store (AlunosRequest $request) {
    if (Alunos::create($request->all())){
      flash('Estudante salvo com sucesso!')->success();
    } else {
      flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
    }

    return redirect()->route('alunos');
  }

  public function delete($id) {
    Alunos::find($id)->delete();

    return redirect()->route('alunos');
  }

  public function edit($id) {
    $aluno = Alunos::find($id);
    return view('alunos.edit', compact('aluno'));
  }

  public function update(AlunosRequest $request, $id) {
    if (Alunos::find($id)->update($request->all())){
      flash('Estudante salvo com sucesso!')->success();
    } else {
      flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
    }

    return redirect()->route('alunos');
  }

  public function deactivate($id) {
    if (Alunos::find($id)->update(['ativo' => false])){
      flash('Estudante desativado!')->success();
    } else {
      flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
    }

    return redirect()->route('alunos');
  }
}
