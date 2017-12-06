@extends('app')

@section('content')
<nav class="navbar navbar-default">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
        </button>
        <a href ="{{ route('turmas') }}"class="navbar-brand ti-arrow-left"></a>
        <a class="navbar-brand" href="#">Turmas</a>
    </div>
  </div>
</nav>
  <div class="content">
    <div class="container-fluid">
    @include('flash::message')
      <div class="card">
      <div class="header">
          <h4 class="title">Nova Turma</h4>
          <p class="category">Crie sua turma e adicione seus estudantes</p>
        </div>

      @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <div class="content">
        {!! Form::open(['route' => ["turmas.store"], 'method'=>'post']) !!}
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control border-input']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::text('descricao', null, ['class'=>'form-control border-input']) !!}
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            {!! Form::label('alunos', 'Estudantes:') !!}
            {!! Form::select('alunos_turmas[]', $alunos, null, ['id'=>'selectize', 'multiple' => true]) !!}
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::submit('Nova Turma', ['class'=>'btn btn-info btn-fill btn-wd']) !!}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
  @endsection
