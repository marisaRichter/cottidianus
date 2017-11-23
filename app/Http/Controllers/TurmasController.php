<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turmas;
use App\Http\Requests\TurmasRequest;

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
    return view('turmas.create');
  }

  public function store (TurmasRequest $request) {
    $turma = new Turmas();
    $turma->nome = $request->get('nome');
    $turma->descricao = $request->get('descricao');
    $turma->user_id=1;
    $turma->save();

    return redirect()->route('turmas');
  }

  public function delete($id) {
    Turmas::find($id)->delete();

    return redirect()->route('turmas');
  }

  public function edit($id) {
    $turma = Turmas::find($id);
    return view('turmas.edit', compact('turma'));
  }

  public function update(TurmasRequest $request, $id) {
    $turma = Turmas::find($id)->update($request->all());

    return redirect()->route('turmas');
  }
}
