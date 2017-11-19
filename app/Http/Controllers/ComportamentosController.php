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

		return redirect('comportamentos');
    }
}
