<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diarios;
use App\Turmas;
use App\Comportamentos;
use App\Alunos;
use App\Http\Requests\DiariosRequest;

class DiariosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function view($alunoID, $turmaID) {
    $diarios = Diarios::where([
      ['aluno_id', '=', $alunoID],
      ['turma_id', '=', $turmaID]
    ])
    ->orderBy('data', 'desc')
    ->get();

    $aluno = Alunos::find($alunoID);
    return view('diarios.view')->with(['diarios' => $diarios, 'aluno' => $aluno, 'turmaID' => $turmaID]);
  }

  public function create($alunoID, $turmaID) {
    $aluno = Alunos::find($alunoID);
    $turma = Turmas::find($turmaID);
    $comportamentos = Comportamentos::pluck('nome', 'id')->all();
    return view('diarios.create')->with(['turma' => $turma, 'comportamentos' => $comportamentos, 'aluno' => $aluno]);
  }

  public function store(DiariosRequest $request, $alunoID, $turmaID) {
    $diario = $request->all();
    $diario['aluno_id'] = $alunoID;
    $diario['turma_id'] = $turmaID;

    Diarios::create($diario);

    return redirect()->route('diarios.view', ['alunoID' => $alunoID, 'turmaID' => $turmaID]);
  }

  public function delete($id) {
    $diario = Diarios::find($id);
    $diario->delete();
    return redirect()->route('diarios.view', ['alunoID' => $diario->aluno_id, 'turmaID' => $diario->turma_id]);
  }

  public function edit($id) {
    $diario = Diarios::find($id);
    $aluno = Alunos::find($diario->aluno_id);
    $turma = Turmas::find($diario->turma_id);
    $comportamentos = Comportamentos::pluck('nome', 'id')->all();
    return view('Diarios.edit', compact('diario', 'turma', 'aluno', 'comportamentos'));
  }

  public function update(DiariosRequest $request, $id) {
    $diario = Diarios::find($id);
    $diario->update($request->all());
    return redirect()->route('diarios.view', ['alunoID' => $diario->aluno_id, 'turmaID' => $diario->turma_id]);
  }
}