<?php

namespace App\Http\Controllers;

use App\Comportamentos;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\ComportamentosRequest;

class ComportamentosController extends Controller
{
    public function index() {
    	$comportamentos = Comportamentos::all();
    	return view('comportamentos.index', ['comportamentos' => $comportamentos]);
    }

    public function create() {
    	return view('comportamentos.create');
    }

    public function store (ComportamentosRequest $request) {
    	$comportamento = $request->all();
		Comportamentos::create($comportamento);

		return redirect()->route('comportamentos');
    }

    public function delete($id) {
    	Comportamentos::find($id)->delete();
    	
    	return redirect()->route('comportamentos');
    }

    public function edit($id) {
    	$comportamento = Comportamentos::find($id);
    	return view('comportamentos.edit', compact('comportamento'));
    }

    public function update(ComportamentosRequest $request, $id) {
    	$comportamento = Comportamentos::find($id)->update($request->all());
    	
    	return redirect()->route('comportamentos');
    }
}
