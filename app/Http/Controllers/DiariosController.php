<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diarios;
use App\Turmas;
use App\Comportamentos;
use App\Http\Requests\DiariosRequest;

class DiariosController extends Controller
{
  public function view($alunoID, $turmaID) {
    $diarios = Diarios::where([
      ['aluno_id', '=', $alunoID],
      ['turma_id', '=', $turmaID]
    ])->get();
    return view('diarios.view')->with('diarios', $diarios);
  }

  public function create($turmaID) {
    $alunos = Turmas::find($turmaID)->alunos()->get();
    $comportamentos = Comportamentos::pluck('nome', 'id')->all();
    return view('diarios.create')->with(['alunos' => $alunos, 'turmaID' => $turmaID, 'comportamentos' => $comportamentos]);
  }

  public function store(DiariosRequest $request, $turmaID) {
    $max = count($request->get('aluno_id'));
    $diarios = [];
    dd($request->all('all'));
    for($i=0; $i<$max; $i++){
        $diarios[$i]['turma_id'] = $turmaID;
        $diarios[$i]['aluno_id'] = $request->get('aluno_id')[$i];
        $diarios[$i]['comportamento_id'] = $request->get('comportamento')[$i];
        $diarios[$i]['descricao'] = $request->get('descricao')[$i];
        $diarios[$i]['data'] = $request->get('data');
    }

    Diarios::saveMany($diarios);

    return redirect()->route('Diarios');
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