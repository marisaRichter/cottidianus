<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'comportamentos', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', ['as' => 'comportamentos', 'uses'=>'ComportamentosController@index']);
	Route::get('create', ['as' => 'comportamentos.create', 'uses'=>'ComportamentosController@create']);
	Route::get('{id}/delete', ['as' => 'comportamentos.delete', 'uses'=>'ComportamentosController@delete']);
	Route::get('{id}/edit', ['as' => 'comportamentos.edit', 'uses'=>'ComportamentosController@edit']);
	Route::put('{id}/update', ['as' => 'comportamentos.update', 'uses'=>'ComportamentosController@update']);
	Route::post('store', ['as' => 'comportamentos.store', 'uses'=>'ComportamentosController@store']);
});

Route::group(['prefix' => 'alunos', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', ['as' => 'alunos', 'uses'=>'AlunosController@index']);
	Route::get('create', ['as' => 'alunos.create', 'uses'=>'AlunosController@create']);
	Route::get('{id}/delete', ['as' => 'alunos.delete', 'uses'=>'AlunosController@delete']);
	Route::get('{id}/edit', ['as' => 'alunos.edit', 'uses'=>'AlunosController@edit']);
	Route::put('{id}/update', ['as' => 'alunos.update', 'uses'=>'AlunosController@update']);
	Route::post('store', ['as' => 'alunos.store', 'uses'=>'AlunosController@store']);
});

Route::group(['prefix' => 'turmas', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', ['as' => 'turmas', 'uses'=>'TurmasController@index']);
	Route::get('create', ['as' => 'turmas.create', 'uses'=>'TurmasController@create']);
	Route::get('{id}/delete', ['as' => 'turmas.delete', 'uses'=>'TurmasController@delete']);
	Route::get('{id}/edit', ['as' => 'turmas.edit', 'uses'=>'TurmasController@edit']);
	Route::put('{id}/update', ['as' => 'turmas.update', 'uses'=>'TurmasController@update']);
	Route::post('store', ['as' => 'turmas.store', 'uses'=>'TurmasController@store']);
	Route::get('{id}/view', ['as'=>'turmas.view', 'uses'=>'TurmasController@view']);
});

Route::group(['prefix' => 'diarios', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', ['as' => 'diarios', 'uses'=>'DiariosController@index']);
	Route::get('create', ['as' => 'diarios.create', 'uses'=>'DiariosController@create']);
	Route::get('{id}/delete', ['as' => 'diarios.delete', 'uses'=>'DiariosController@delete']);
	Route::get('{id}/edit', ['as' => 'diarios.edit', 'uses'=>'DiariosController@edit']);
	Route::put('{id}/update', ['as' => 'diarios.update', 'uses'=>'DiariosController@update']);
	Route::post('store', ['as' => 'diarios.store', 'uses'=>'DiariosController@store']);
});
