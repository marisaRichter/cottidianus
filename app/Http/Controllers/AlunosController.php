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
    $aluno = $request->all();
    Alunos::create($aluno);

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
    $aluno = Alunos::find($id)->update($request->all());

    return redirect()->route('alunos');
  }
}
