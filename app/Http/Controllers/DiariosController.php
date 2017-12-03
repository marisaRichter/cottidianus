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
    Diarios::find($id)->delete();

    return redirect()->route('Diarios');
  }

  public function edit($id) {
    $diario = Diarios::find($id);
    return view('Diarios.edit', compact('diario'));
  }

  public function update(DiariosRequest $request, $id) {
    $diario = Diarios::find($id)->update($request->all());

    return redirect()->route('Diarios');
  }
}