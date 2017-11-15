<?php

namespace App\Http\Controllers;

use App\Comportamentos;
use Illuminate\Http\Request;

class ComportamentosController extends Controller
{
    public function index() {
    	$comportamentos = Comportamentos::all();
    	return view('comportamentos/index', ['comportamentos' => $comportamentos]);
    }
}
