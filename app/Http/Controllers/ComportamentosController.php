<?php

namespace App\Http\Controllers;

use App\Comportamentos;
use App\Emojis;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\ComportamentosRequest;

class ComportamentosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$comportamentos = Comportamentos::all();
      $emojis = Emojis::all();
    	return view('comportamentos.index', ['comportamentos' => $comportamentos, 'emojis' => $emojis]);
    }

    public function create() {
    	return view('comportamentos.create');
    }

    public function store (ComportamentosRequest $request) {
      if (Comportamentos::create($request->all())){
        flash('Comportamento salvo com sucesso!')->success();
      } else {
        flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
      }

      return redirect()->route('comportamentos');
    }

    // rever essa function
    public function delete($id) {
      if (Comportamentos::find($id)->delete()){
        flash('Comportamento removido com sucesso!')->success();
      } else {
        flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
      }
    	
    	return redirect()->route('comportamentos');
    }

    public function edit($id) {
    	$comportamento = Comportamentos::find($id);
    	return view('comportamentos.edit', compact('comportamento'));
    }

    public function update(ComportamentosRequest $request, $id) {
      if (Comportamentos::find($id)->update($request->all())){
        flash('Comportamento salvo com sucesso!')->success();
      } else {
        flash('Desculpe, mas não conseguimos salvar sua requisição!')->error();
      }
    	
    	return redirect()->route('comportamentos');
    }
}
